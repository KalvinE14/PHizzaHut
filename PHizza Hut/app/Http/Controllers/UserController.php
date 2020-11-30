<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        if(Session::get('username'))
        {
            $role = Session::get('role');

            if(strcmp($role, "Admin") == 0)
            {
                return view('all_user', ['users' => $users]);
            }else
            {
                return redirect()->route('home');
            }
        }

        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|unique:users,email|email:rfc,dns',
            'password' => 'required|min:6',
            'confirmPw' => 'same:password',
            'address' => 'required',
            'phone' => 'required|numeric',
            'gender' => 'required',
        ]);

        if($validator->fails()){
            return view('register')->withErrors($validator->errors());
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'role' => 'Member'
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return view('login')->withErrors($validator->errors());
        }

        $email = $request->get('email');
        $password = $request->get('password');

        $user = User::where('email', 'LIKE', $email)->where('password', 'LIKE', $password)->get();

        if(count($user) == 1)
        {
            foreach($user as $u)
            {
                Session::put('username', $u->username);
                Session::put('role', $u->role);
                Session::put('user_id', $u->user_id);
            }
            if($request->has('remember'))
            {
                Cookie::queue('email', $email, 120);
                Cookie::queue('password', $password, 120);
            }
            return redirect()->route('home');
        }else
        {
            return redirect()->route('login_page')->withErrors(['warning' => 'Incorect email and/or password']);
        }
    }

    public function showLoginPage()
    {
        if(Cookie::get('email') && Cookie::get('password'))
        {
            return redirect()->route('home');
        }

        return view('login');
    }

    public function logout()
    {
        $cookieEmail = Cookie::forget('email');
        $cookiePassword = Cookie::forget('password');
        Session::forget('username');
        Session::forget('role');
        Session::forget('user_id');

        return redirect()->route('home')->withCookies([$cookieEmail, $cookiePassword]);
    }

    public function showRecoveryPage()
    {
        if(Cookie::get('email') && Cookie::get('password'))
        {
            return redirect()->route('home');
        }

        return view('recovery');
    }

    public function recoveryAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'new_password' => 'required|min:6',
        ]);

        if($validator->fails()){
            return view('recovery')->withErrors($validator->errors());
        }

        $email = $request->get('email');
        $new_password = $request->get('new_password');

        $user = User::where('email', 'LIKE', $email)->get();

        if(count($user) == 1)
        {
            User::where('email', '=', $email)->update([
                'password' => $new_password
            ]);

            return redirect()->route('login_page');
        }else
        {
            return redirect()->route('recovery_page')->withErrors(['warning' => 'Incorrect email, please input your email correctly']);
        }
    }
}

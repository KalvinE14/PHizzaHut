<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
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
        if(Session::get('username'))
        {
            return redirect()->route('home');
        }

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
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt([
            'email' => $email,
            'password' => $password
        ], false))
        {
            $user = User::where('email', 'LIKE', $email)->get();

            dump($user);

            foreach($user as $u)
            {
                Session::put('username', $u->username);
                Session::put('role', $u->role);
                Session::put('user_id', $u->user_id);
            }
            if($request->has('remember'))
            {
                $user = Auth::user();
                Cookie::queue('email', $user->email, 120);
                Cookie::queue('password', $user->password, 120);
            }
            print('aaa');

            print("Session username: " . Session::get('username') . "\n");
            print("Session role: " . Session::get('role') . "\n");

            print("Cookie email: " . Cookie::get('email') . "\n");

            Session::save();
            return redirect()->route('home');
        }

        dump(Auth::attempt([
            'email' => $email,
            'password' => $password
        ], false));

        // return redirect()->back()->withErrors(['warning' => 'Incorect email and/or password']);
    }

    public function showLoginPage()
    {
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
        if(Session::get('username'))
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

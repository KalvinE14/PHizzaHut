<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::paginate(6);

        return view('home', ['pizzas' => $pizzas]);
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
            $username = Session::get('username');
            $validateUser = User::where('username', 'LIKE', $username)->get();
            foreach($validateUser as $valUser)
            {
                if(strcmp($valUser->role, "Admin") == 0)
                {
                    return view('create_pizza');
                }else
                {
                    return redirect()->route('home');
                }
            }
        }

        return redirect()->route('home');
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
            'pizza_name' => 'required|max:20',
            'description' => 'required|min:20',
            'price' => 'required|gt:10000',
            'image' => 'required|image',
        ]);

        if($validator->fails()){
            return view('create_pizza')->withErrors($validator->errors());
        }

        Pizza::create([
            'pizza_name' => $request->pizza_name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->file('image')->getClientOriginalName(),
        ]);

        $image = $request->file('image');
        $imageName = $request->file('image')->getClientOriginalName();

        $image->move(public_path('assets'), $imageName);

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
        $pizza = Pizza::get()->where('pizza_id', '=', $id);

        return view('pizza_detail', ['pizza' => $pizza]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = Pizza::get()->where('pizza_id', '=', $id);

        if(Session::get('username'))
        {
            $username = Session::get('username');
            $validateUser = User::where('username', 'LIKE', $username)->get();
            foreach($validateUser as $valUser)
            {
                if(strcmp($valUser->role, "Admin") == 0)
                {
                    if(count($pizza) == 0)
                    {
                        print('There is no pizza with that id');
                    }
                    return view('update_pizza', ['pizza' => $pizza]);
                }else
                {
                    return redirect()->route('home');
                }
            }
        }
        
        return redirect()->route('home');
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
        $pizza = Pizza::get()->where('pizza_id', '=', $id);

        $validator = Validator::make($request->all(), [
            'pizza_name' => 'required|max:20',
            'description' => 'required|min:20',
            'price' => 'required|gt:10000',
            'image' => 'required|image',
        ]);

        if($validator->fails()){
            return view('update_pizza', ['pizza' => $pizza])->withErrors($validator->errors());
        }

        Pizza::where('pizza_id', '=', $id)->update([
            'pizza_name' => $request->pizza_name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->file('image')->getClientOriginalName(),
        ]);

        return redirect()->route('home'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $pizza = Pizza::get()->where('pizza_id', '=', $id);

        Pizza::where('pizza_id', 'LIKE', $id)->delete();

        return redirect()->route('home'); 
    }

    public function delete($id)
    {
        $pizza = Pizza::get()->where('pizza_id', '=', $id);

        if(Session::get('username'))
        {
            $username = Session::get('username');
            $validateUser = User::where('username', 'LIKE', $username)->get();
            foreach($validateUser as $valUser)
            {
                if(strcmp($valUser->role, "Admin") == 0)
                {
                    if(count($pizza) == 0)
                    {
                        print('There is no pizza with that id');
                    }
                    return view('delete_pizza', ['pizza' => $pizza]);
                }else
                {
                    return redirect()->route('home');
                }
            }
        }

        return redirect()->route('home');
    }
}

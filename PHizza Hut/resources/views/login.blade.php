@extends('template.master')

@section('title', 'Login')

@section('content')
    <div id="login_name" style="margin-bottom: 50px;">
        <div class="row justify-content-center" style="background-color: red;color: white;">
            <h1>Login</h1>
        </div>
    </div>
    
    <div id="form_login" style="margin-bottom: 50px;padding-bottom: 30px;">
        <form method="POST" action= "{{ route('login') }}">
            @csrf
            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="email">Email</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="text" name="email" id="email" placeholder="email">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="pw">Password</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="password" name="password" id="pw" placeholder="password">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 10px;margin-left: 17px;">
                    <input type="checkbox" name="remember" id="remember">
                </div>

                <div class="col-lg3">
                   <label for="remember">Remember Me!</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <button type="submit">Login</button>
            </div>

            @if($errors->any())
                    <p style="color:red; text-align: center;margin-top: 20px;">{{$errors->first()}}</p>
            @endif
        </form>
    </div>
@endsection
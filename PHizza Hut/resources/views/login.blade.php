@extends('template.master')

@section('title', 'Login')

@section('content')
    <form method="POST" action= "{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <br>
            <input type="text" name="email" id="email">
        </div>
        
        <div>
            <label for="pw">Password</label>
            <br>
            <input type="password" name="password" id="pw">
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me!</label>
            <br>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
@endsection
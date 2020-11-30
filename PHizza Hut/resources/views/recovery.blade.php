@extends('template.master')

@section('title', 'Login')

@section('content')
    <div id="recovery_name" style="margin-bottom: 50px;">
        <div class="row justify-content-center" style="background-color: red;color: white;">
            <h1>Recovery Account</h1>
        </div>
    </div>
    
    <div id="form_login" style="margin-bottom: 50px;padding-bottom: 30px;">
        <form method="POST" action= "{{ route('recovery_account') }}">
            @csrf
            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 103px;">
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
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 103px;">
                    <label for="pw">New Password</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="password" name="new_password" id="new_password" placeholder="new password">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <button type="submit">Recover</button>
            </div>

            @if($errors->any())
                <p style="color:red; text-align: center;margin-top: 20px;">{{$errors->first()}}</p>
            @endif
        </form>
    </div>
@endsection
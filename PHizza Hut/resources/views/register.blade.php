@extends('template.master')

@section('title', 'Register')

@section('content')
    <div id="register_name" style="margin-bottom: 50px;">
        <div class="row justify-content-center" style="background-color: red;color: white;">
            <h1>Register</h1>
        </div>
    </div>
    
    <div id="form_register" style="margin-bottom: 50px;padding-bottom: 30px;">
        <form method="POST" action= "{{ route('register') }}">
            @csrf
            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="username">Username</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="text" name="username" id="username" placeholder="username">
                </div>
            </div>

            
            

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="email">Email Address</label>
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
                    <label for="password">Password</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="confirmPw">Confirm Password</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="password" name="confirmPw" id="confirmPw" placeholder="confirm password">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="address">Address</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="text" name="address" id="address" placeholder="address">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="phone">Phone Number</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="text" name="phone" id="phone" placeholder="phone">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 40px;margin-left: 17px;width: 50px;">
                    <label for="gender">Gender</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <input type="radio" id="male" name="gender" value="Male">
                </div>

                <div class="col-lg3" style="margin-right: 10px;">
                    <label for="male">Male</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <input type="radio" id="female" name="gender" value="Female">
                </div>

                <div class="col-lg3" style="margin-right: 10px;">
                    <label for="Female">Female</label>
                </div>
            </div>

            <div class="row justify-content-center">
                <button class="btn btn-danger" type="submit">Register</button>
            </div>

            @if($errors->any())
                <p style="color:red; text-align: center;margin-top: 20px;">{{$errors->first()}}</p>
            @endif
        </form>
        
    </div>
@endsection
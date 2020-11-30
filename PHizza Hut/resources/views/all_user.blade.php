@extends('template.master')

@section('title', 'View All User')

@section('content')
    
    <div class="row justify-content-center" style="margin-left: 0px;margin-right: 0px;">
        @foreach($users as $user)
            <div class="col-lg3" style="width: 500px; margin-left: 50px;margin-right: 50px;border: solid;margin-top: 10px;margin-bottom: 10px;">
                <div style="background-color: red; padding-left: 10px;">
                    <p>User ID : {{ $user->user_id }}</p>
                </div>   

                <div style="padding-left: 10px;">
                    <p>Username : {{ $user->username }}</p>
                </div>    

                <div style="padding-left: 10px;">
                    <p>Email : {{ $user->email }}</p>
                </div>    

                <div style="padding-left: 10px;">
                    <p>Address : {{ $user->address }}</p>
                </div>    

                <div style="padding-left: 10px;">
                    <p>Phone Number : {{ $user->phone }}</p>
                </div>  

                <div style="padding-left: 10px;">
                    <p>Gender : {{ $user->gender }}</p>
                </div>    
            </div>
        @endforeach
    </div>
@endsection
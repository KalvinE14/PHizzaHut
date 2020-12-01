@extends('template.master')

@section('title', 'View All User')

@section('content')
    
    <div class="row justify-content-center" style="margin-left: 0px;margin-right: 0px;">
        @foreach($users as $user)
            <div class="col-lg3" style="width: 500px; margin-left: 50px;margin-right: 50px;border: solid red;margin-top: 10px;margin-bottom: 10px;">
                <div class="pl-2" style="background-color: red; padding-left: 10px; color:white; padding-top: 8px; padding-left: 8px; padding-right: 8px; padding-bottom: 8px">
                    User ID : {{ $user->user_id }}
                </div>   
                
                <div class="mt-2" style="padding-left: 10px;">
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
@extends('template.master')

@section('title', 'View All User')

@section('content')
    
    <div class="row" style="margin-left: 0px;margin-right: 0px;">
        @foreach($users as $user)
            <div class="col-lg3" style="margin-left: 95px;margin-right: 95px;border: solid;margin-top: 10px;margin-bottom: 10px;">
                <p>User ID : {{ $user->user_id }}</p>
                <p>Username : {{ $user->username }}</p>
                <p>Email : {{ $user->email }}</p>
                <p>Address : {{ $user->address }}</p>
                <p>Phone Number : {{ $user->phone }}</p>
                <p>Gender : {{ $user->gender }}</p>
            </div>
        @endforeach
    </div>
@endsection
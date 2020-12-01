<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid min-vh-100" style="background-color: #f2ede9;padding-bottom: 40px;">
        <div id="header">
            <div class="row" style="background-color: red;">
                <a href="{{ route('home') }}" style="text-decoration: none;color:white">
                    <div class="row ml-4 align-self-center" style="padding-left: 85px;padding-right: 85px;">
                        <div class="col-xs-6">
                            <img id="logo" src="{{ url('assets/logo.png') }}" alt="" width="70px" height="70px">
                        </div>
                        <div class="col-xs-6" style="margin-top: 5px;margin-left: 10px;">
                            <h1 id="logo_name">PHizza Hut</h1>
                        </div>
                    </div>
                </a>

                <div class="row mt-3 ml-auto mr-4 align-self-center" style="padding-left: 85px;padding-right: 85px;">
                    @if(Session::get('username') && strcmp(Session::get('role'), "Member") == 0)
                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('transaction_history', Session::get('user_id')) }}">View Transaction History</a>
                        </div>

                        <div class="col-xs-6" style="margin-left: 10px; margin-right: 10px;">
                            <p style="color: white;"> | </p>
                        </div>

                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('cart', Session::get('user_id')) }}">View Cart</a>
                        </div>

                        <div class="col-xs-6" style="margin-left: 10px; margin-right: 10px;">
                            <p style="color: white;"> | </p>
                        </div>

                        <div class="col-xs-6">
                            <p style="color: white;">{{ Session::get('username') }}</p>
                        </div>

                        <div class="col-xs-6" style="margin-left: 10px; margin-right: 10px;">
                            <p style="color: white;"> | </p>
                        </div>

                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('logout') }}">Logout</a>
                        </div>
                    @elseif(Session::get('username') && strcmp(Session::get('role'), "Admin") == 0)
                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('all_transaction') }}">View All User Transaction</a>
                        </div>

                        <div class="col-xs-6" style="margin-left: 10px; margin-right: 10px;">
                            <p style="color: white;"> | </p>
                        </div>

                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('all_user') }}">View All User</a>
                        </div>

                        <div class="col-xs-6" style="margin-left: 10px; margin-right: 10px;">
                            <p style="color: white;"> | </p>
                        </div>

                        <div class="col-xs-6">
                            <p style="color: white;">{{ Session::get('username') }}</p>
                        </div>

                        <div class="col-xs-6" style="margin-left: 10px; margin-right: 10px;">
                            <p style="color: white;"> | </p>
                        </div>

                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('logout') }}">Logout</a>
                        </div>
                    @else
                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('login_page') }}">Login</a>
                        </div>

                        <div class="col-xs-6" style="margin-left: 10px; margin-right: 10px;">
                            <p style="color: white;"> | </p>
                        </div>

                        <div class="col-xs-6">
                            <a style="text-decoration: none;color: white;" href="{{ route('register_page') }}">Register</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="body container pt-3 pb-3" style="background-color: white; margin-top: 40px;">
            @yield('content')
        </div>
    </div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div id="header" style="background-color: red;">
            <div class="row">
                <div class="row ml-0">
                    <a href="{{ route('home') }}" style="text-decoration: none;color:white">
                        <div class="row ml-3">
                            <div class="col-xs-6">
                                <img id="logo" src="{{ url('assets/logo.png') }}" alt="" width="100px" height="100px">
                            </div>
                            <div class="col-xs-6">
                                <h1 id="logo_name">PHizza Hut</h1>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="row ml-auto mr-3">
                    @if(Session::get('username'))
                        <div class="col-xs-6">
                            <a href="{{ route('transaction_history', $user_id) }}">View Transaction History</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="{{ route('cart', $user_id) }}">View Cart</a>
                        </div>
                        {{ Session::get('username') }}
                        <div class="col-xs-6">
                            <a href="{{ route('logout') }}"><button>Logout</button></a>
                        </div>
                    @else
                        <div class="col-xs-6">
                            <a href="{{ route('login_page') }}"><button>Login</button></a>
                        </div>
                        <div class="col-xs-6">
                            <a href="{{ route('register_page') }}"><button>Register</button></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div id="body">
            @yield('content')
        </div>
    </div>

    
</body>
</html>
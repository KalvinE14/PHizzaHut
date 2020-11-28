<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
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
</body>
</html>
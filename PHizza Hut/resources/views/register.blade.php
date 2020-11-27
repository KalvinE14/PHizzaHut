<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="POST" action= "{{ route('register') }}">
        @csrf
        <div>
            <label for="username">Username</label>
            <br>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="email">Email Address</label>
            <br>
            <input type="text" name="email" id="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="confirmPw">Confirm Password</label>
            <br>
            <input type="password" name="confirmPw" id="confirmPw">
        </div>

        <div>
            <label for="address">Address</label>
            <br>
            <input type="text" name="address" id="address">
        </div>

        <div>
            <label for="phone">Phone Number</label>
            <br>
            <input type="text" name="phone" id="phone">
        </div>

        <div>
            <label for="gender">Gender</label>
            <br>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="Female">Female</label>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
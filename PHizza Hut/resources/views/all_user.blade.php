<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">

        <!-- @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif -->

        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Role</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td> {{$user->user_id}} </td>
                <td> {{$user->username}} </td>
                <td> {{$user->email}} </td>
                <td> {{$user->password}} </td>
                <td> {{$user->address}} </td>
                <td> {{$user->phone}} </td>
                <td> {{$user->gender}} </td>
                <td> {{$user->role}} </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
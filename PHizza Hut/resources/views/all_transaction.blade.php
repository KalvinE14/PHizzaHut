<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">

       
        @foreach($transactions as $t)
            Transaction at {{$t->created_at}} <br>
            User ID: {{$t->user_id}} <br>
            Username: {{$t->username}}
            <br>
            <br>
        @endforeach
    </table>
</body>
</html>
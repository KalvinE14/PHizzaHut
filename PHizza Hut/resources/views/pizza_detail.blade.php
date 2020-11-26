<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>Pizza ID</th>
            <th>Pizza Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
        </tr>

        @foreach($pizza as $p)
            <tr>
                <td> {{$p->pizza_id}} </td>
                <td> {{$p->pizza_name}} </td>
                <td> {{$p->description}} </td>
                <td> {{$p->price}} </td>
                <td> {{$p->image}} </td>
            </tr>     
        </a>
        @endforeach
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <a href="{{ route('logout') }}"><button>Logout</button></a>
        <tr>
            <th>Pizza ID</th>
            <th>Pizza Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
        </tr>

        @foreach($pizzas as $pizza)
        <a href="{{ route('pizza_detail', $pizza->pizza_id) }}">
            a
            <tr>
                <td> {{$pizza->pizza_id}} </td>
                <td> {{$pizza->pizza_name}} </td>
                <td> {{$pizza->description}} </td>
                <td> {{$pizza->price}} </td>
                <td> {{$pizza->image}} </td>
            </tr>     
        </a>
        @endforeach
    </table>

    @if(Session::get('username'))
        {{ Session::get('username') }}
    @endif
    
</body>
{{ $pizzas->links() }}
</html>
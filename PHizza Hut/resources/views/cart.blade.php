<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        @foreach ($allcart as $c)
            {{$c->image}}
            {{$c->pizza_name}}
            {{$c->price}}
            {{$c->quantity}}

            <form action= "/update_quantity/{{$c->cart_id}}/{{$c->user_id}}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="quantity">
                
                <button type="submit" class="btn btn-primary">Update Quantity</button>
            </form>

            <form action="/delete_cart/{{$c->cart_id}}/{{$c->user_id}}" method="POST">
                {{ csrf_field() }}
                <button type="submit">Delete Cart</button>
            </form>
            <br>
            <br>
        @endforeach
        
        @if ($allcart != null)
            <form action="/checkout/{{$user_id}}" method="POST">
                {{ csrf_field() }}
                <button type="submit">Checkout</button>
            </form>         
        @endif

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
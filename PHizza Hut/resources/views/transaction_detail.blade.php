<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        @foreach ($detail as $d)
            {{$d->transaction_id}}
            {{$d->pizza_id}}
            {{$d->quantity}}
            {{$d->total_price}}
            {{$d->pizza_name}}
            {{$d->description}}
            {{$d->price}}
            {{$d->image}}
            <br>
            <br>
        @endforeach
    </body>
</html>
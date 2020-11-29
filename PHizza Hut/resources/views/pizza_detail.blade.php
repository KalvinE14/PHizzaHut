@extends('template.master')

@section('title', 'Pizza's Detail')

@section('content')
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
            
            <br>
            <br>
            @if (Session::get('username') && Session::get('role') == 'Member')
                <form action="/add_cart/{{$p->pizza_id}}" method="POST">
                    {{ csrf_field() }}

                    <h5>Quantity</h5> 
                    <input type="text" name="quantity">
                    <button type="submit">Add to Cart</button>
                </form>
            @endif
        @endforeach
    </table>
@endsection
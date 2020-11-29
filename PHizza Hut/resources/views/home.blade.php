@extends('template.master')

@section('title', 'Home')

@section('content')

<table border="1" cellpadding="10" cellspacing="0">
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
    
    {{ $pizzas->links() }}
    
@endsection
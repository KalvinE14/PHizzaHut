@extends('template.master')

@section('title', "Pizza's Detail")

@section('content')

    @foreach($pizza as $p)
        <div class="row">
            <div class="col-lg3" style="margin-right: 80px;margin-left: 10px;">
                <img id="pizza_img" src="{{ url('assets/' . $p->image) }}" alt="" width="300px" height="250px">
            </div>

            <div class="col-lg3" style="margin-top: 45px;">
                <h1>{{ $p->pizza_name }}</h1>
                <p>{{ $p->description }}</p>
                <p>Rp. {{ $p->price }}</p>
                @if (Session::get('username') && Session::get('role') == 'Member')
                <form action="/add_cart/{{$p->pizza_id}}" method="POST">
                    {{ csrf_field() }}

                    <h5>Quantity</h5> 
                    <input type="text" name="quantity">
                    <button type="submit">Add to Cart</button>
                </form>
                @endif
            </div>
            
        </div>
    @endforeach
@endsection
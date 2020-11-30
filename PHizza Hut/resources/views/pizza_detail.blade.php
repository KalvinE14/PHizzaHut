@extends('template.master')

@section('title', "Pizza's Detail")

@section('content')

    @foreach($pizza as $p)
        <div class="row" style="margin-left: 40px;margin-right: 40px;">
            <div class="col-lg3" style="margin-right: 80px;margin-left: 10px;">
                <img id="pizza_img" src="{{ url('assets/' . $p->image) }}" alt="" width="300px" height="300px">
            </div>

            <div class="col-lg3 align-self-center" style="width: 600px;">
                <h1 style="margin-bottom: 30px;">{{ $p->pizza_name }}</h1>
                <p style="margin-bottom: 30px;">{{ $p->description }}</p>
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
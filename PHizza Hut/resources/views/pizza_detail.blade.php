@extends('template.master')

@section('title', "Pizza's Detail")

@section('content')

    @foreach($pizza as $p)
        <div class="row" style="margin-left: 40px;margin-right: 40px;">
            <div class="col-lg3" style="margin-right: 80px;margin-left: 10px;">
                <img id="pizza_img" src="{{ url('assets/' . $p->image) }}" alt="" width="300px" height="300px">
            </div>

            <div class="col-lg3 align-self-center" style="width: 600px;">
                <h1 style="margin-bottom: 30px;"><b>{{ $p->pizza_name }}</b></h1>
                <p style="margin-bottom: 30px;">{{ $p->description }}</p>
                <p>Rp. {{ $p->price }}</p>
                @if (Session::get('username') && Session::get('role') == 'Member')
                    <form action="/add_cart/{{$p->pizza_id}}" method="POST">
                        {{ csrf_field() }}

                        <h6>Quantity</h5> 
                        <input type="text" name="quantity" style="padding-top: 5px; padding-bottom: 5px; padding-left:5px; padding-right: 5px">
                        <button type="submit" class="btn btn-danger">Add to Cart</button>
                    </form>
                    @if($errors->any())
                        <br>
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                    @endif
                @endif
            </div>
            
        </div>
    @endforeach
@endsection
@extends('template.master')

@section('title', 'Cart')

@section('content')
        <div class="container">
            @foreach ($allcart as $c)
                
                    <div class="media">
                        <img src="{{ url('assets/' . $c->image) }}" class="align-self-center mr-3" alt="pizza_image" width="270px" height="270px">
                        <div class="media-body ml-5 mt-4">
                            <h3 class="mt-0">{{$c->pizza_name}}</h5>
                            <p>Rp. {{$c->price}}</p>
                            <p>Quantity: {{$c->quantity}}</p>
                            

                            <form action= "/update_quantity/{{$c->cart_id}}/{{$c->user_id}}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="quantity" placeholder="Quantity" style="padding-top: 5px; padding-bottom: 5px; padding-left:5px; padding-right: 5px">
                                
                                <button type="submit" class="btn btn-danger">Update Quantity</button>
                            </form>
                            <br>
                            <form action="/delete_cart/{{$c->cart_id}}/{{$c->user_id}}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Delete Cart</button>
                            </form>
                        </div>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                    @endif
                    <div style="background-color: red; height: 2px"></div>
            @endforeach
        </div>
        <br>
    @if (count($allcart) != 0)
        <div class="container mb-3" style="text-align: center">
            <form action="/checkout/{{$user_id}}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">Checkout</button>
            </form>         
        </div>
    @else
        <div class="alert alert-danger" role="alert">
            There is no item in the cart !
        </div>
    @endif
@endsection
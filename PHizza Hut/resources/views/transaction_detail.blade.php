@extends('template.master')

@section('title', 'Transaction Detail')

@section('content')
        @foreach ($detail as $d)
            <div class="media">
                <img src="{{ url('assets/' . $d->image) }}" class="align-self-center mr-3" alt="pizza_image" width="270px" height="270px">
                <div class="media-body ml-5 mt-4">
                    <h3 class="mt-0">{{$d->pizza_name}}</h5>
                    <p>Rp. {{$d->price}}</p>
                    <p>Quantity: {{$d->quantity}}</p>
                    <p>Total Price: Rp. {{$d->total_price}}</p>
                </div>
            </div>
            <div style="background-color: red; height: 2px"></div>
        @endforeach
@endsection
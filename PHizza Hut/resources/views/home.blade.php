@extends('template.master')

@section('title', 'Home')

@section('content')

    <div class="row">
        @if (Session::get('username') && Session::get('role') == 'Admin')
            <div class="col-lg3 ml-4" style="padding-left: 85px;padding-right: 85px;">
                <a href="{{ route('create_pizza_page') }}">
                    <button>Add Pizza</button>
                </a>
            </div>

            <div class="col-lg3 ml-auto mr-4" style="padding-left: 85px;padding-right: 85px;">
                {{ $pizzas->links() }}
            </div>
            
        @endif
    </div>
   

    <div class="row" style="margin-left: 0px;margin-right: 0px;">
        @foreach($pizzas as $pizza)
            <div class="col-lg3" style="margin-left: 95px;margin-right: 95px;border: solid;margin-top: 10px;margin-bottom: 10px;">
                <a style="text-decoration: none;color: black;" href="{{ route('pizza_detail', $pizza->pizza_id) }}">
                    <img id="logo" src="{{ url('assets/' . $pizza->image) }}" alt="" width="300px" height="250px">
                    <p>{{$pizza->pizza_name}}</p>
                    <p>Rp. {{$pizza->price}}</p>
                    @if(Session::get('username') && Session::get('role') == 'Admin')
                        <a href="{{ route('update_pizza_page', $pizza->pizza_id) }}">
                            <button>Update Pizza</button>
                        </a>
                        <a href="{{ route('delete_pizza_page', $pizza->pizza_id) }}">
                            <button>Delete Pizza</button>
                        </a>
                    @endif
                </a>
            </div>
        @endforeach
    </div>
@endsection
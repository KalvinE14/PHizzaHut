@extends('template.master')

@section('title', 'Home')

@section('content')

    @if (Session::get('username') && Session::get('role') == 'Admin')
        <a href="{{ route('create_pizza_page') }}">
            <button>Add Pizza</button>
        </a>
    @endif

    <div class="row" style="margin-left: 0px;background-color: blue;margin-right: 0px;">
        @foreach($pizzas as $pizza)
            <div class="col-lg3" style="margin-left: 50px;margin-right: 50px;">
                <a href="{{ route('pizza_detail', $pizza->pizza_id) }}">
                    <img id="logo" src="{{ url('assets/' . $pizza->image) }}" alt="" width="300px" height="300px">
                    <p>{{$pizza->pizza_name}}</p>
                    <p>Rp. {{$pizza->price}}</p>
                    @if (Session::get('username') && Session::get('role') == 'Admin')
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
    
    
    {{ $pizzas->links() }}

@endsection
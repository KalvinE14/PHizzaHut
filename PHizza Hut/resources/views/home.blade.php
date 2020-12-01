@extends('template.master')

@section('title', 'Home')

@section('content')
    <div class="row">
        @if (Session::get('username') && Session::get('role') == 'Admin')
        <div class="col-lg3 mr-auto ml-4" >
            <a href="{{ route('create_pizza_page') }}">
                <button class="btn btn-danger" style="margin-top: 20px; margin-left: 25px;">Add Pizza</button>
            </a>
        </div>
        @else
        <div class="col-lg3 mr-auto ml-4 mb-4">
            <form action="{{ route('search_pizza') }}" method="post">
                @csrf
                <div class="container ml-3">
                    Search Pizza: <input class="pt-1 pb-1 pl-1 pr-1" style="margin-top: 20px; margin-left: 25px; width: 500px" type="text" name="search" id="search">
                    <button type="submit" class="btn btn-danger ml-2">Search</button>
                </div>
            </form>
        </div>
        @endif
    </div>
        
   

    <div class="row" style="margin-left: 0px;margin-right: 0px;">
        @foreach($pizzas as $pizza)
            <div class="col-lg3" style="margin-left: 31px;margin-right: 30px;border: solid red; border-radius: 10px;margin-top: 10px;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;">
                <a style="text-decoration: none;color: black;" href="{{ route('pizza_detail', $pizza->pizza_id) }}">
                    <img id="logo" src="{{ url('assets/' . $pizza->image) }}" alt="" width="300px" height="250px">
                    <p style="margin-left: 20px; font-size: 28px"><b>{{$pizza->pizza_name}}</b></p>
                    <p style="margin-left: 20px;">Rp. {{$pizza->price}}</p>
                    @if(Session::get('username') && Session::get('role') == 'Admin')
                        <div class="container" style="text-align: center">
                            <a style="margin-left: 20px;margin-right: 20px; text-decoration: none" href="{{ route('update_pizza_page', $pizza->pizza_id) }}">
                                <button class="btn btn-danger btn-sm pt-2 pb-2 pl-2 pr-2">Update Pizza</button>
                            </a>
                            <a style="margin-left: -15px;margin-right: 20px; text-decoration: none" href="{{ route('delete_pizza_page', $pizza->pizza_id) }}">
                                <button class="btn btn-danger btn-sm pt-2 pb-2 pl-2 pr-2">Delete Pizza</button>
                            </a>
                        </div>
                    @endif
                </a>
            </div>
        @endforeach
        <div class="container" style="text-align: center">
            <div class="col-lg3 mr-4" style="margin-top: 15px;">
                <div id="paginate" style="margin-right: 35px; text-align: center">
                    {{ $pizzas->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
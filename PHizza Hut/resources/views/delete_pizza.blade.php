@extends('template.master')

@section('title', "Delete Pizza")

@section('content')
    @foreach($pizza as $p)
        <div class="row">
            <div class="col-lg3">
                <img id="pizza_img" src="{{ url('assets/' . $p->image) }}" alt="" width="300px" height="250px">
            </div>

            <div class="col-lg3">
                <h1>{{ $p->pizza_name }}</h1>
                <p>{{ $p->description }}</p>
                <p>Rp. {{ $p->price }}</p>
                <form method="POST" action= "{{ route('delete_pizza', $p->pizza_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <button type="submit">Delete Pizza</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
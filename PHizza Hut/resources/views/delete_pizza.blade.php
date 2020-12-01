@extends('template.master')

@section('title', "Delete Pizza")

@section('content')
    @foreach($pizza as $p)
        <div class="row" style="margin-left: 40px;margin-right: 40px;">
            <div class="col-lg3" style="margin-right: 80px;margin-left: 10px;">
                <img id="pizza_img" src="{{ url('assets/' . $p->image) }}" alt="" width="300px" height="300px">
            </div>

            <div class="col-lg3 align-self-center text-break" style="width: 600px;  word-wrap: break-word">
                <h1 style="margin-bottom: 30px;">{{ $p->pizza_name }}</h1>
                <p style="margin-bottom: 30px;">{{ $p->description }}</p>
                <p style="margin-bottom: 30px;">Rp. {{ $p->price }}</p>
                <form method="POST" action= "{{ route('delete_pizza', $p->pizza_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <button class="btn btn-danger" type="submit">Delete Pizza</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
@extends('template.master')

@section('title', "Delete Pizza")

@section('content')
    @foreach($pizza as $p)
        {{ $p->image }}
        {{ $p->pizza_name }}
        {{ $p->description }}
        {{ $p->price }}
        {{ $p->pizza_name }}

        <form method="POST" action= "{{ route('delete_pizza', $p->pizza_id) }}" enctype="multipart/form-data">
            @csrf
            <div>
                <button type="submit">Delete Pizza</button>
            </div>
        </form>
    @endforeach
@endsection
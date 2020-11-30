@extends('template.master')

@section('title', "Create Pizza")

@section('content')

    <div id="create_pizza" style="padding-left: 50px;">
        <div id="title">
            <h1>
                Add New Pizza
            </h1>
        </div>

        <div class="form">
            <form method="POST" action= "{{ route('create_pizza') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="pizza_name">Pizza Name</label>
                    <br>
                    <input type="text" name="pizza_name" id="pizza_name">
                </div>

                <div>
                    <label for="price">Pizza Price</label>
                    <br>
                    <input type="number" name="price" id="price">
                </div>
                
                <div>
                    <label for="description">Description</label>
                    <br>
                    <input type="text" name="description" id="description">
                </div>

                <div>
                    <label for="image">Pizza Image</label>
                    <br>
                    <input type="file" name="image" id="image">
                </div>

                <div>
                    <button type="submit">Add Pizza</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('template.master')

@section('title', "Update Pizza")

@section('content')
    @foreach($pizza as $p)
        <div class="row" style="width: 100%; margin-left: 0px;">
            <div class="col-lg3">
                <img id="pizza_img" src="{{ url('assets/' . $p->image) }}" alt="" width="300px" height="250px">
            </div>

            <div class="col-lg3">
                <form method="POST" action= "{{ route('update_pizza', $p->pizza_id) }}" enctype="multipart/form-data">
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
                        <button type="submit">Update Pizza</button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
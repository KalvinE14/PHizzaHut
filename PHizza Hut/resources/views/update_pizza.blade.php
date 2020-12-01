@extends('template.master')

@section('title', "Update Pizza")

@section('content')
    @foreach($pizza as $p)
        <div class="row" style="margin-left: 40px;">
            <div class="col-lg3" style="margin-right: 100px;">
                <img id="pizza_img" src="{{ url('assets/' . $p->image) }}" alt="" width="350px" height="350px">
            </div>

            <div class="col-lg3 align-self-center">
                <h1>Edit Pizza Details</h1>
                <form method="POST" action= "{{ route('update_pizza', $p->pizza_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg3" style="margin-right: 80px;margin-left: 17px;width: 100px;">
                            <label for="pizza_name">Pizza Name</label>
                        </div>

                        <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                            <p> : </p>
                        </div>

                        <div class="col-lg3" style="margin-right: 80px;">
                            <input type="text" name="pizza_name" id="pizza_name" placeholder="pizza name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg3" style="margin-right: 80px;margin-left: 17px;width: 100px;">
                            <label for="price">Pizza Price</label>
                        </div>

                        <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                            <p> : </p>
                        </div>

                        <div class="col-lg3" style="margin-right: 80px;">
                            <input type="number" name="price" id="price" placeholder="pizza price">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg3" style="margin-right: 80px;margin-left: 17px;width: 100px;">
                            <label for="description">Description</label>
                        </div>

                        <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                            <p> : </p>
                        </div>

                        <div class="col-lg3" style="margin-right: 80px;">
                            <input type="text" name="description" id="description" placeholder="description">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg3" style="margin-right: 80px;margin-left: 17px;width: 100px;">
                            <label for="image">Pizza Image</label>
                        </div>

                        <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                            <p> : </p>
                        </div>

                        <div class="col-lg3" style="margin-right: 80px;">
                            <input type="file" name="image" id="image">
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-danger" type="submit">Update Pizza</button>
                    </div>
                </form>
                @if($errors->any())
                    <p style="color:red; text-align: center;margin-top: 20px;">{{$errors->first()}}</p>
                @endif

                
            </div>
        </div>
    @endforeach
@endsection
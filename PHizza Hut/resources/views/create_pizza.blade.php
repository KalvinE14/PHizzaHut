@extends('template.master')

@section('title', "Create Pizza")

@section('content')

    <div id="create_pizza" style="margin-bottom: 50px;">
        <div class="row justify-content-center" style="background-color: red;color: white;">
            <h1>Add New Pizza</h1>
        </div>
    </div>
    
    <div id="form_create_pizza" style="margin-bottom: 50px;padding-bottom: 30px;">
        <form method="POST" action= "{{ route('create_pizza') }}" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 10px;margin-left: 17px;width: 100px;">
                    <label for="pizza_name">Pizza Name</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="text" name="pizza_name" id="pizza_name" placeholder="Pizza Name" style="padding-top: 5px; padding-bottom: 5px; padding-left:5px; padding-right: 5px">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 10px;margin-left: 17px;width: 100px;">
                    <label for="price">Pizza Price</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="number" name="price" id="price" placeholder="Pizza Price" style="padding-top: 5px; padding-bottom: 5px; padding-left:5px; padding-right: 5px">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px">
                <div class="col-lg3" style="margin-right: 10px;margin-left: 17px;width: 100px;">
                    <label for="description">Description</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input type="text" name="description" id="description" placeholder="Description" style="padding-top: 5px; padding-bottom: 5px; padding-left:5px; padding-right: 5px">
                </div>
            </div>

            <div class="row justify-content-center" style="margin-bottom: 20px;">
                <div class="col-lg3" style="margin-right: 10px;margin-left: 17px;width: 100px;">
                    <label for="image">Pizza Image</label>
                </div>

                <div class="col-lg3" style="margin-left: 17px; margin-right: 10px;">
                    <p> : </p>
                </div>

                <div class="col-lg3">
                    <input style="width: 185px;" type="file" name="image" id="image" style="padding-top: 5px; padding-bottom: 5px; padding-left:5px; padding-right: 5px">
                </div>
            </div>

            <div class="row justify-content-center">
                <button class="btn btn-danger" type="submit">Add Pizza</button>
            </div>

            @if($errors->any())
                <p style="color:red; text-align: center;margin-top: 20px;">{{$errors->first()}}</p>
            @endif
        </form>
    </div>
@endsection
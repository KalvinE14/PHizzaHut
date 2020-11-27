<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
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
</body>
</html>
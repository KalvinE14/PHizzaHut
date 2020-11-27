<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    @foreach($pizza as $p)
        {{$p->image}}

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
    @endforeach
</body>
</html>
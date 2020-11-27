<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Pizza</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
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
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Customer</h1>
        <form method="post" action="{{ $url }}">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $customer->name }}">
            </div><br>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description">{{ $customer->description }}</textarea>
            </div><br>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>

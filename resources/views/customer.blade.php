<!DOCTYPE html>
<html>
<head>
    <title>Create Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<form action="{{url('/')}}/customer" method="post">
    @csrf
    <div class="container">
    <h1>Create Item</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea><br><br>

        <input type="submit" value="Create Record" class="btn btn-secondary">
   
    </div>
    </form>
</body>
</html>

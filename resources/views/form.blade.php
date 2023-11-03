<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Registration Form</title>
</head>
<body>
    <form action="{{url('/')}}/form" method="post">
        @csrf
    <div class="container">
        <h1 class="text-center">Registration</h1>

        <x-input type="text" name="name" label="Enter your name"/>
        <x-input type="email" name="email" label="Enter your email"/>
        <x-input type="password" name="password" label="Enter your password"/>
        
        <!-- <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div> -->
        <br>
        <button class="btn btn-primary">Submit</button>
    </div>
    </form>
</body>
</html>
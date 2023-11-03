<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <h1>Item List</h1>
    <a class="btn btn-primary" href="{{route('customer.name')}}">Add New Item</a><hr>
    
    <table class="table table-secondary" border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
            @php
                $customers = array_reverse($customers->all());
            @endphp

        @foreach($customers as $index=> $customer)
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->description}}</td>
            <td>
                <a href="{{route('customer.edit', ['id'=>$customer->id])}}" class="btn btn-success">Edit</a>
                <a onclick="confirmDelete({{ $customer->id }})" class="btn btn-danger">Delete</a>
                <!-- <a href="{{url('/customer/delete')}}/{{$customer->id}}" class="btn btn-danger">Delete</a> -->
            </td>
        </tr>
        @endforeach
        
    </table>
    </div>

    <script>
    function confirmDelete(customerId) {
        if (confirm("Are you sure you want to delete this customer?")) {
            // Send an AJAX request to delete the customer
            $.ajax({
                type: 'POST',
                url: '/customer/delete/' + customerId,
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function () {
                    // Reload the page or remove the deleted row from the table
                    location.reload(); // You can also use JavaScript to remove the row without reloading the page
                },
            });
        }
    }
</script>
</body>
</html>

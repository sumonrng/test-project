<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="btn btn-primary">Add User</h1>
                <form action="{{Route('updateUser',$data->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Name</label>
                      <input type="text" class="form-control" value="{{$data->name}}" id="username" name="username" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" value="{{$data->email}}" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Age</label>
                        <input type="text" class="form-control" value="{{$data->age}}" id="age" name="age" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">City</label>
                        <input type="text" class="form-control" value="{{$data->city}}" id="city" name="city" placeholder="name@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    
</body>
</html>
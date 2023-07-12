<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{Route('addUser')}}" class="btn btn-primary">Add User</a>
    <table>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach ($data as $key=>$user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->city}}</td>
            <td><a href="{{route('showUpdate',$user->id)}}"class="btn btn-primary">Update</a></td>
            <td><a href="{{route('delete.user',$user->id)}}"class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </table>
            </div>
        </div>
    </div>
    
</body>
</html>
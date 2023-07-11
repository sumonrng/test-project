<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User</title>
</head>
<body>
    
    <table border="border: 1px solid black;">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>Delete</th>
        </tr>
        @foreach ($data as $key=>$user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->city}}</td>
            <td><a href="{{route('delete.user',$user->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
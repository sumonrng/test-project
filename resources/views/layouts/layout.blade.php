<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
</head>
<body>
    
    @php
    $data = ['rohim','karim','natasha','rozina'];
    @endphp
    <script>
        // var data = @json($data);
        var data = {{Js::from($data)}}
        console.log(data);
        data.forEach(function(entry){
        console.log(entry);
        });

    </script>
   
    
    <p>Layout page</p>
    <div id="wraper">Hello</div>
    @hasSection('contents')
        @yield('contents')
    @else
        <h1>No content found.</h1>
    @endif

    @section('show')
    <h1>Hello form show</h1>
    @show
    @stack('script')

    
    
</body>
</html>
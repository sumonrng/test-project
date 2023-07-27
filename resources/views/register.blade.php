<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{-- <script src="{{url('js/jquery-3.7.0.js')}}"></script> --}}
    <script src={{ asset('js/jquery-3.7.0.js') }}></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="refer_id">refer_id:</label>
                <input type="text" class="form-control" placeholder="Enter refer_id" name="refer_id" id="refer_id">
                <span id="spon_msg"></span>
            </div>
            <div class="form-group">
                <label for="user_id">user_id address:</label>
                <input type="user_id" class="form-control" placeholder="Enter user_id" name="user_id" id="user_id">
                <span id="user_msg"></span>
            </div>
            <div class="form-group">
                <label for="name">name address:</label>
                <input type="name" class="form-control" placeholder="Enter name" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="pwd" id="pwd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#refer_id').on('keyup', function() {
                $('#spon_msg').text('searching...');
                var refer_id = this.value;
                console.log(refer_id);
                $.ajax({
                    url: "{{ route('register') }}",
                    type: "POST",
                    data: {
                        refer_id: refer_id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        const myObj = JSON.parse(response);
                        // alert(myObj.name);
                        if (response == 0) {
                            $('#spon_msg').text('Not Valid');
                        } else {
                            $('#spon_msg').text(myObj.name);
                        }
                    }
                });
            });
            $('#user_id').on('keyup', function() {
                $.ajax({
                    url: ,
                    type: ,
                    data: {

                    },
                    success: function(response) {

                    }
                })
            })
        });
    </script>

</body>

</html>

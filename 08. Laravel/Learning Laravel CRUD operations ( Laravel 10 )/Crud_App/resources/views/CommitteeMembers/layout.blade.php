<!DOCTYPE html>
<html>
<head>
    <title>CRUD APPLICATION</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

    <!-- As a link -->
    <nav class="navbar navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('committee.index') }}">CRUD CORPORATION LTD.</a>
        </div>
    </nav>

    <div class="container">
        <br>
        @yield('content')
    </div>

</body>
</html>
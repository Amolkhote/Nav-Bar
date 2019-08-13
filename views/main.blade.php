<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amol Khote</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">

</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto pl-2">
            <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/about">About Us</a>
            <a class="nav-item nav-link" href="/contact">Contact Us</a>
            <a class="nav-item nav-link" href="/login">Login</a>
            <a class="nav-item nav-link" href="/demo123">Display & Update</a>
            <a class="nav-item nav-link" href="/insert">Insert Data</a>

        </div>
    </div>
</nav><!-- End Of Navigation Bar -->

@yield('content')
<script src=" {{ url('js/jquery.js') }} "></script>
<script src="{{url('js/app.js')}}"></script>
<script !src="{{url('js/bootstrap.js')}}"></script>
</body>
</html>

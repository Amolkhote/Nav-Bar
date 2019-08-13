
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Login In Laravel </h1>

@if(isset(Auth::user()->email))

    <div class="alert alert-danger success-block">
        <strong>Welcome {{ Auth::user()->email }} </strong>
    </div><br>

    <a href="{{ url('/main/logout') }}">Logout</a>
@else
    <script type="text/javascript">window.location="/";</script>
@endif
</body>
</html>

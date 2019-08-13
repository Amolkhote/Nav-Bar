@extends('main')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>

</head>
<body>

@section('content')
    <div class="container border" style="border: 2px solid #17a2b8">
        <h1>Login Here</h1>
        @if(isset(Auth::user()->email))
            <script type="text/javascript">window.location="/main/succeslogin"</script>
        @endif
        @if($message=Session::get('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-disimiss="alert"></button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ url('/main/checklogin') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Email</label>
                <input class="form-control" type="email" name="email"> </input>
            </div>
            <div class="form-group">
                <label>Enter password</label>
                <input class="form-control" type="password" name="password">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="login" value="Login">
            </div>
        </form>
    </div>
@endsection
</body>
</html>

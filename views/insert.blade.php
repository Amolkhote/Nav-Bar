@extends('main')
<!DOCTYPE html>
<html>
<head>
    <title>Student Management | Edit</title>
</head>
<body>
@section('content')
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error  }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container row" style="padding:20px 20px 20px 20px;">
<form action = "/insert_data" method = "post" class="form-check-inline">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table class="table table-hover table-borderless">
        <tr>
            <td>First Name</td>
            <td>
                <input type = 'text' required name = 'name'/>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <input type = 'text' name = 'last_name' required/>
            </td>
        </tr>

        <tr>
            <td colspan = '2' align="center">
                <input type = 'submit' class="btn btn-outline-primary" value = "Insert Data" />
            </td>
        </tr>
    </table>
</form>
</div>
    @endsection
</body>
</html> 
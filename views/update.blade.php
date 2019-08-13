@extends('main')
<!DOCTYPE html>
<html>
<head>
    <title>Student Management | Edit</title>
</head>
<body>
@section('content')
    <div class="container border-info">
<form action = "/edit/<?php echo $users[0]->id; ?>" align="center" method = "post" class="table table-hover table-borderless">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>First Name</td>
            <td>
                <input type = 'text' name = 'first_name'
                       value = '<?php echo$users[0]->name; ?>'/> </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <input type = 'text' name = 'last_name'
                       value = '<?php echo$users[0]->last_name; ?>'/>
            </td>
        </tr>


        <tr>
            <td colspan = '2' align="center">
                <input type = 'submit' class="btn btn-outline-info" value = "Update Data" />
            </td>
        </tr>
    </table>
</form>
    </div>
    @endsection
</body>
</html> 
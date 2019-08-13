@extends('main')
<!DOCTPE html>
<html>
<head>
    <title>View Student Records</title>
</head>
<script>
    function DeleteNotice(id)
    {
        if(confirm("You want to delete this record ?"))
        {
            window.location.href=""+id;
        }
    }
</script>
<body>
@section('content')
<table align="center" class="table table-hover table-borderless">
    <thead>
    <tr>
        <td>Id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td> Update </td>
        <td> Delete </td>

    </tr>
    </thead>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->last_name }}</td>
            <td><a href="update/{{ $user->id  }}">Update</a> </td>
            <td><a href="javascript:DeleteNotice('delete/{{ $user->id  }} ') ">Delete</a> </td>

        </tr>
    @endforeach
</table>
@endsection
</body>
</html>
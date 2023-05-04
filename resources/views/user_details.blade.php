<!DOCTYPE html>
<html lang="en">
<head>
    <title>DataTables Load Large Data's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">
    <h3>Large Data or 1 million Data Quick Load within few second | DataTables Server Processing in Laravel</h3>
    <br>
    <table class="table table-striped" id="user_details_table" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#user_details_table").DataTable({
            serverSide: true,
            ajax: {
                url: '{{route('user.details')}}'
            },
            buttons: false,
            searching: true,
            processing: true,
            scrollY: 500,
            scrollX: true,
            scrollCollapse: true,
            columns: [
                {data: "user_id", className: 'user_id'},
                {data: "username", className: 'username'},
                {data: "first_name", className: 'first_name'},
                {data: "last_name", className: 'last_name'},
                {data: "gender", className: 'gender'},
                {data: "status", className: 'status'}
            ]
        });
    });
</script>
</body>
</html>

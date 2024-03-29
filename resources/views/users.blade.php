<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel 10 Datatables Date Range Filter</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    </head>
    <style>
        .row {
            padding: 0em 3em;
        }
    </style>
<body>
    <div class="wrapper">
        <h1 class="text-center text-danger">Laravel Users Table Range Filter</h1>
        <table class="table table-dark" id="daterange_table" style="width: 1500px; margin: 0 auto;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(function () {

            var table = $('#daterange_table').DataTable({
                columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
                }],
                processing : true,
                serverSide : true,
                ajax : {
                    url : "{{route('users.index')}}"
                },
                columns : [
                    {data : 'id', name : 'id'},
                    {data : 'name', name : 'name'},
                    {data : 'email', name : 'email'},
                    {data : 'created_at', name : 'created_at'}
                ]
            });
        });
    </script>
</body>
</html>
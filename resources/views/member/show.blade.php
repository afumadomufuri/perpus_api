<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <title>Detail Member</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
                ID Member
            </div>
            <div class="col-md-4 col-sm-4">
                {{ $data['id_member'] }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
                Nama
            </div>
            <div class="col-md-4 col-sm-4">
                {{ $data['nama'] }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
                NIM
            </div>
            <div class="col-md-4 col-sm-4">
                {{ $data['nim'] }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-2 col-sm-3 offset-sm-2">
                Email
            </div>
            <div class="col-md-4 col-sm-4">
                {{ $data['email'] }}
            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        });
    </script>
</body>
</html>
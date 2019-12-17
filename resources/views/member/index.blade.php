<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
    <title>Member</title>
</head>
<body>
    <div class="container">
        <h3>Data Member</h3>
            <a href="{{route('member.create')}}" class="btn btn-primary btn-md"><i class="fas fa-plus-circle"></i> Add Data</a>
        <hr>
        @if (session('status'))
            <div class="alert alert-success " role="alert">
                <strong>{{ session('status') }}</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label-"Close">
			        <span aria-hidden="true">&times;</span>
		        </button>
            </div>
        @endif
        <table class="table table-hover" id="myTable">
            <thead>
            <tr align="center">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody align="center">
                @foreach ($data as $key)
                    <tr>
                        <td>{{ $key->id_member }}</td>
                        <td>{{ $key->nama }}</td>
                        <td>{{ $key->nim }}</td>
                        <td>{{ $key->email }}</td>
                        <td>
                            <a href="{{route('member.show', $key['id_member'])}}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Show</a>
                            <a href="{{route('member.edit', $key['id_member'])}}" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> Edit</a>
                            <form class="d-inline" action="{{route('member.delete', $key['id_member'])}}" onsubmit="return('Are Your Sure Delete This Data ?')" method="POST">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
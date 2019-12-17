

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('member.update', $data['id_member']) }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input type="text" autocomplete="off" class="form-control" id="nama" name="nama" value="{{$data['nama']}}">
            </div>

            <div class="form-group">
              <label for="NIM">NIM</label>
              <input type="text" autocomplete="off" class="form-control" id="nim" name="nim" value="{{$data['nim']}}">
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" autocomplete="off" class="form-control" id="email" name="email" value="{{$data['email']}}">
            </div>

            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" autocomplete="off" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
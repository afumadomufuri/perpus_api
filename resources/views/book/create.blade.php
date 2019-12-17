<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tambah Buku</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('book.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="Nama">ISBN</label>
                <input type="text" autocomplete="off" class="form-control" id="isbn" name="isbn">
            </div>

            <div class="form-group">
                <label for="Nama">Judul</label>
                <input type="text" autocomplete="off" class="form-control" id="judul" name="judul">
            </div>

            <div class="form-group">
                <label for="NIM">Pengarang</label>
                <input type="text" autocomplete="off" class="form-control" id="pengarang" name="pengarang">
            </div>

            <div class="form-group">
                <label for="Email">Penerbit</label>
                <input type="text" autocomplete="off" class="form-control" id="penerbit" name="penerbit">
            </div>

            <div class="form-group">
                <label for="Password">Tahun Terbit</label>
                <input type="text" autocomplete="off" class="form-control" id="tahun_terbit" name="tahun_terbit">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Detail Data Siswa</title>
</head>

<body>
    <div class="container pt-4 pb-4">
        <h1 class="text-center">Detail Data Siswa {{ $siswa->nama_siswa }}</h1>
        <h2 class="text-center">SMK Taruna Bhakti</h2>
        <hr>
        <div class="form-group">
            <label for="nis">NIS : {{ $siswa->nis }}</label>
        </div>
        <div class="form-group">
            <label for="nama_siswa">Nama Siswa : {{ $siswa->nama_siswa }}</label>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat : {{ $siswa->alamat }}</label>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir : {{ $siswa->tempat_lahir }}</label>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir : {{ $siswa->tanggal_lahir }}</label>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan : {{ $siswa->jurusan }}</label>
        </div>
        <div class="form-group">
            <label for="nohp">Nomor HP : {{ $siswa->nohp }}</label>
        </div>
        <a href="/datasiswa" class="btn btn-primary">Data Siswa</a>
        <a class="btn btn-warning" href="{{ url("siswa/$siswa->id/edit") }}">Edit</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
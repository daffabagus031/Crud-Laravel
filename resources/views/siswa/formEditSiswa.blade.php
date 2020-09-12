<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Form Data Siswa</title>
</head>

<body>
    <div class="container pt-4 pb-4">
        <h1 class="text-center">Form Edit Data Siswa</h1>
        <h2 class="text-center"> SMK Taruna Bhakti</h2>
        <hr>
        <form action="{{ route('siswa.proses',['siswa'=>$siswa->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="nis">NIS</label>

                <input type="text" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ $siswa->nis }}">
            </div>
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                @error('nama_siswa')
                <div class="alert alert-danger">{{ $message}}</div>
                @enderror
                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" value="{{ $siswa->nama_siswa }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                @error('alamat')
                <div class="alert alert-danger">{{ $message}}</div>
                @enderror
                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control @error('alamat') is-invalid @enderror">{{ $siswa->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                @error('tempat_lahir')
                <div class="alert alert-danger">{{ $message}}</div>
                @enderror
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ $siswa->tempat_lahir }}">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                @error('tanggal_lahir')
                <div class="alert alert-danger">{{ $message}}</div>
                @enderror
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ $siswa->tanggal_lahir }}">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                @error('jurusan')
                <div class="alert alert-danger">{{ $message}}</div>
                @enderror
                <select name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                    <option selected="selected" value="{{ $siswa->jurusan }}">{{ $siswa->jurusan }}</option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="TKJ">Teknik Komputer dan Jaringan</option>
                    <option value="MM">Multimedia</option>
                    <option value="BC">Broadcast</option>
                    <option value="TEI">Teknik Elektronika Industri</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nohp">Nomor HP</label>
                @error('nohp')
                <div class="alert alert-danger">{{ $message}}</div>
                @enderror
                <input type="number" name="nohp" id="nohp" class="form-control @error('nohp') is-invalid @enderror" value="{{ $siswa->nohp }}">
            </div>
            <button name="daftar" id="daftar" class="btn btn-success" type="submit">Update</button>
            <a href="/datasiswa" class="btn btn-primary">Lihat Data Siswa</a>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
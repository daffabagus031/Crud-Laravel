<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Data Siswa</title>
</head>

<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-sm-8">
                <h2>Tabel Siswa</h2>
            </div>
            <div class="col-sm-4">
                <a href="/siswa/simpan" class="btn btn-success float-right">Tambah Data</a>
            </div>
        </div>
        @if(session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('pesan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif(session()->has('hapus'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get('hapus') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif(session()->has('update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('update') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datasiswa as $s)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->nama_siswa }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->tempat_lahir }}</td>
                    <td>{{ $s->tanggal_lahir }}</td>
                    <td>{{ $s->jurusan }}</td>
                    <td>{{ $s->nohp }}</td>
                    <td>
                        <a href="/siswa/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                        <a href="siswa/{{ $s->id }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
                @empty
                <td colspan="8"></td>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
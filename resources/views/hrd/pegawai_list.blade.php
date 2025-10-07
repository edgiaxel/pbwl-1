@extends('layouts.app')
@section('title', 'Daftar Pegawai')
@section('content')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai HRD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4 font-weight-bolder" id="judul-utama">Daftar Pegawai HRD</h1>
        <a href="{{ url('/pegawai/tambah') }}" class="btn btn-success mb-3">Tambah Pegawai Baru</a>
        <a href="{{ url('/pegawai/history') }}" class="btn btn-info mb-3">Riwayat Hapus</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Gaji</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ $p->profile_picture ? asset('storage/' . $p->profile_picture) : asset('images/placeholder.jpg') }}"
                                alt="{{ $p->nama_lengkap }}" class="rounded-circle"
                                style="width: 50px; height: 50px; object-fit: cover;">
                        </td>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->jabatan }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->no_hp }}</td>
                        <td>{{ $p->tanggal_lahir }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>Rp {{ number_format($p->gaji, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ url('/pegawai/' . $p->id . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ url('/pegawai/' . $p->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Hapus Data?');">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
        </div>
    </div>
</body>

</html>
@endsection
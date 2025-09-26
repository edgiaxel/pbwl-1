@extends('layouts.app')
@section('title', 'History Pegawai')
@section('content')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Hapus Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <h1 class="text-center text-primary mb-4 font-weight-bolder">Riwayat Hapus Pegawai</h1>
        <a href="{{ url('/pegawai') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Pegawai</a>
        <hr>
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Tanggal Hapus</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawaiTrashed as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nama_lengkap }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->deleted_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <form action="{{ url('/pegawai/' . $p->id . '/restore') }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-info"
                                    onclick="return confirm('Kembalikan data ini?');">Pulihkan</button>
                            </form>
                            <form action="{{ url('/pegawai/' . $p->id . '/force-delete') }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Hapus permanen?');">Hapus
                                    Permanen</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
@endsection
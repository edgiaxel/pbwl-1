@extends('layouts.app')

@section('content')

@section('title', 'Tambah Pegawai')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 800px;">
        <h1 class="text-center text-primary mb-4">
            @if (isset($pegawai))
            Form Edit Pegawai
            @else
            Form Tambah Pegawai
            @endif
        </h1>
        <hr>
        <form action="{{ isset($pegawai) ? url('/pegawai/' . $pegawai->id) : url('/pegawai') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @if (isset($pegawai))
            @method('PUT')
            @endif

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap"
                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                    value="{{ old('nama_lengkap', $pegawai->nama_lengkap ?? '') }}">
                @error('nama_lengkap')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan"
                    class="form-control @error('jabatan') is-invalid @enderror"
                    value="{{ old('jabatan', $pegawai->jabatan ?? '') }}">
                @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email', $pegawai->email ?? '') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor HP:</label>
                <input type="text" id="no_hp" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
                    value="{{ old('no_hp', $pegawai->no_hp ?? '') }}">
                @error('no_hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir ?? '') }}">
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea id="alamat" name="alamat"
                    class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $pegawai->alamat ?? '') }}</textarea>
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji:</label>
                <input type="number" id="gaji" name="gaji" step="0.01"
                    class="form-control @error('gaji') is-invalid @enderror"
                    value="{{ old('gaji', $pegawai->gaji ?? '') }}">
                @error('gaji')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="profile_picture" class="form-label">Foto Pegawai :</label>
                @if (isset($pegawai) && $pegawai->profile_picture)
                <p>Current Photo :</p>
                <img src="{{ asset('storage/' . $pegawai->profile_picture) }}" alt="Current Photo"
                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 5px;" class="mb-2">
                @endif
                <input type="file" id="profile_picture" name="profile_picture"
                    class="form-control @error('profile_picture') is-invalid @enderror" accept="image/*">
                @error('profile_picture')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <small class="form-text text-muted">Abaikan jika tidak ingin mengubah foto.</small>
            </div>

            <button type="submit" class="btn btn-success w-100 mb-2">Simpan</button>
            <button type="button" onclick="window.location.href = '{{ url('/pegawai') }}'"
                class="btn btn-secondary w-100">Kembali</button>
        </form>
    </div>
</body>

</html>
@endsection
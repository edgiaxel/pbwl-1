<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai HRD</title>
    <style>
    body {
        font-family: sans-serif;
        background-color: #f4f7f9;
        color: #333;
        margin: 0;
        padding: 20px;
    }

    h1 {
        color: #2c3e50;
        text-align: center;
    }

    a {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 15px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    a:hover {
        background-color: #2980b9;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    thead tr {
        background-color: #2c3e50;
        color: #ecf0f1;
        text-transform: uppercase;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    td a {
        display: inline;
        padding: 5px 8px;
        font-size: 12px;
        margin: 0 2px;
    }

    td a:first-child {
        background-color: #e67e22;
    }

    td a:last-child {
        background-color: #e74c3c;
    }
    </style>
</head>

<body>
    <h1>Daftar Pegawai HRD</h1>
    <a href="{{ url('/pegawai/tambah') }}">Tambah Pegawai Baru</a>
    <hr>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->nama_lengkap }}</td>
                <td>{{ $p->jabatan }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_hp }}</td>
                <td>{{ $p->tanggal_lahir }}</td>
                <td>{{ $p->alamat }}</td>
                <td>Rp {{ number_format($p->gaji, 0, ',', '.') }}</td>
                <td>
                    <a href="#">Edit</a> |
                    <a href="#">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
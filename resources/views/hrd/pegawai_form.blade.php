<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pegawai HRD</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f7f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        a {
            display: inline-block;
            margin-bottom: 20px;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            border: 0;
            border-top: 1px solid #eee;
            margin-bottom: 20px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input:focus,
        textarea:focus {
            border-color: #3498db;
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #27ae60;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Form Tambah/Edit Pegawai</h1>
        <a href="{{ url('/pegawai') }}">Kembali ke Daftar Pegawai</a>
        <hr>
        <form action="{{ url('/pegawai') }}" method="POST">
            @csrf
            <div>
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap">
            </div>
            <div>
                <label for="jabatan">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="no_hp">Nomor HP:</label>
                <input type="text" id="no_hp" name="no_hp">
            </div>
            <div>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div>
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat"></textarea>
            </div>
            <div>
                <label for="gaji">Gaji:</label>
                <input type="number" id="gaji" name="gaji" step="0.01">
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
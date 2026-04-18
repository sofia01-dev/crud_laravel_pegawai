<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Tambah Pegawai</title>
</head>
<body>
    <div class="form-center">
    <div class="container">
        <h1>Tambah Pegawai</h1>
        <form action="/pegawai" method="POST">
        @csrf
        
        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="number" name="umur" placeholder="Umur"><br>
        <select name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <textarea name="alamat" placeholder="Alamat"></textarea><br>
        <input type="text" name="nomor_telepon" placeholder="No Telepon"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="jabatan" placeholder="Jabatan"><br>
        <input type="number" name="gaji" placeholder="Gaji"><br>
        <button type="submit" class="btn">Simpan</button>
        </form>
    </div>
    </div>
</body>
</html>
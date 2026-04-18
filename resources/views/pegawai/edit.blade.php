<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Halaman Edit Pegawai</title>
</head>
<body>
    <div class="form-center">
        <div class="container">
            <h1>Edit Pegawai</h1>
            <form action="/pegawai/{{ $data->id }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="nama" value="{{ $data->nama }}"><br>
            <input type="number" name="umur" value="{{ $data->umur }}"><br>
            <select name="jenis_kelamin">
                <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select><br>
            <textarea name="alamat">{{ $data->alamat }}</textarea><br>
            <input type="text" name="nomor_telepon" value="{{ $data->nomor_telepon }}"><br>
            <input type="email" name="email" value="{{ $data->email }}"><br>
            <input type="text" name="jabatan" value="{{ $data->jabatan }}"><br>
            <input type="number" name="gaji" value="{{ $data->gaji }}"><br>

            <button type="submit" class="btn">Update</button>
            </form>  
        </div> 
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    <a href="/pegawai/create">Tambah Pegawai</a>

    <table>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>NO Telepon</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->umur }}</td>
            <td>{{ $d->jenis_kelamin }}</td>
            <td>{{ $d->alamat }}</td>
            <td>{{ $d->nomor_telepon }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->jabatan }}</td>
            <td>Rp {{ number_format($d->gaji, 0, ',', '.') }}</td>
            <td>
                <a href="/pegawai/{{ $d->id }}/edit" class="btn">Edit</a>
                <form action="/pegawai/{{ $d->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah kamu yakin ingin hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>           
        @endforeach       
    </table>
</body>
</html>
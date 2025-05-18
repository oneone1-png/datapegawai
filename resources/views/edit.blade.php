<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>

<h3>Edit Data Pegawai</h3>

<form action="{{ route('pegawai.update', $pegawai->pegawai_id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama</label><br>
    <input type="text" name="nama" value="{{ $pegawai->pegawai_nama }}"><br><br>

    <label>Jabatan</label><br>
    <input type="text" name="jabatan" value="{{ $pegawai->pegawai_jabatan }}"><br><br>

    <label>Umur</label><br>
    <input type="number" name="umur" value="{{ $pegawai->pegawai_umur }}"><br><br>

    <label>Alamat</label><br>
    <textarea name="alamat">{{ $pegawai->pegawai_alamat }}</textarea><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>

</body>
</html>

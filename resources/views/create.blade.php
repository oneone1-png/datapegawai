<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
</head>
<body>
    <h3>Tambah Pegawai Baru</h3>

    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('pegawai.index') }}">Kembali ke daftar pegawai</a>
</body>
</html>

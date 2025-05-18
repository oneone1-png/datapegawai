<!DOCTYPE html>
<html>
    <head>
        <title>tutorial memmbuat crud pada laravel</title>
</head>
<body>
    <h3>Data Pegawai</h3>

 <a href="{{ route('pegawai.create') }}">+ Tambah Pegawai Baru</a>

<br/>
<br/>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
</tr>
@foreach($pegawai as $p)
<tr>
<td>{{ $p->pegawai_nama}}</td>
<td>{{ $p->pegawai_jabatan}}</td>
<td>{{ $p->pegawai_umur}}</td>
<td>{{ $p->pegawai_alamat}}</td>
<td>
<a href="{{ route('pegawai.edit', $p->pegawai_id) }}"><button type>Edit</button></a>
<form action="{{ route('pegawai.destroy', $p->pegawai_id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>

</td>
</tr>
@endforeach
</table>
</body>
 </html>
<title>Tambah Data</title>
<a href="/pasien"> Kembali</a>
<h3>Tambah Data Pasien</h3>
<form action="/tambah/store" method="post">
    @csrf
    NAMA: <input type="text" name="nama">
    ALAMAT: <input type="text" name="alamat">
    <button type="submit">Tambah</button>
</form>

<title>Tambah Data</title>
<form action="/tambah/store" method="post">
    @csrf
    NAMA: <input type="text" name="nama">
    ALAMAT: <input type="text" name="alamat">
    <button type="submit">Tambah</button>
</form>

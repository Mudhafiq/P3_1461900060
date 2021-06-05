<head>
<title>Edit Pasien</title>
</head>
<body>
    <a href="/pasien"> Kembali</a>
    @foreach($pasien as $ps)
    <form action="/edit/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $ps->id}}">
        NAMA: <input type="text" name="nama" value="{{ $ps->nama }}">
        ALAMAT: <input type="text" name="alamat" value="{{ $ps->alamat }}">
        <button type="submit">Simpan</button>
    </form>
    @endforeach
</body>
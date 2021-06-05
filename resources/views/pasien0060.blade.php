<body>
    <div style="overflow-x:auto;">
        <a href="/tambah">Tambah Data </a></br>
        <a href="/join">Data Lengkap</a>
        <p>Cari pasien :</p>
        <form action="/pasien/cari" method="GET">
        <input type="text" name="lihat" placeholder="Cari pasien.." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </br>
        </br>
        <table border="3">
        <style>
            table {
            border-collapse: collapse;
            border-spacing: 3;
            width: 50%;
            border: 3px solid #FF0000;
            background-color: #E0FFFF;
            }
        </style>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $ps)
                <tr>
                    <td>{{$ps->id}}</td>
                    <td>{{$ps->nama}}</td>
                    <td>{{$ps->alamat}}</td>
                    <td>
                    <a href="/edit/{{ $ps->id }}">Edit</a>
                    |
                    <a href="/hapus/{{ $ps->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
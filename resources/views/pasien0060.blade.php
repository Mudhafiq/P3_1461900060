<body>
    <div style="overflow-x:auto;">
        <a href="/tambah">Tambah Data </a>
        <table border="3">
        <style>
            table {
            border-collapse: collapse;
            border-spacing: 3;
            width: 70%;
            border: 3px solid #ddd;
            background-color: #E0FFFF;
            }
        </style>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
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
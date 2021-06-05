<body>
    <div style="overflow-x:auto;">
        <a href="/pasien">kembali </a>
        </br>
        <h4>Data Pasien Lengkap</h4>
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
                    <th>Dokter</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $ps)
                <tr>
                    <td>{{$ps->id}}</td>
                    <td>{{$ps->nama}}</td>
                    <td>{{$ps->alamat}}</td>
                    <td>{{$ps->nama_dokter}}</td>
                    <td>{{$ps->jabatan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai</title>
    <style>
        /* Tambahkan CSS sesuai kebutuhan */
    </style>
</head>
<body>
    <h1>Daftar Nilai</h1>
    <table>
        <thead>
            <tr>
                <th>Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Tahun Akademik</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $nilai)
                <tr>
                    <td>{{ $nilai->mahasiswa->nama }}</td>
                    <td>{{ $nilai->mataKuliah->nama }}</td>
                    <td>{{ $nilai->tahunAkademik->tahun }}</td>
                    <td>{{ $nilai->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

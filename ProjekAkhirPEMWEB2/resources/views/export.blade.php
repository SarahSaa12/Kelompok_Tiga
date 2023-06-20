<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Data Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $students)
                <tr>
                    <td>{{ $students->nama }}</td>
                    <td>{{ $students->NIS }}</td>
                    <td>{{ $students->jenis_kelamin }}</td>
                    <td>{{ $students->kelas }}</td>
                    <td>{{ $students->alamat }}</td>
                    <td>{{ $students->no_hp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

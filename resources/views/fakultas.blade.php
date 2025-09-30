<!DOCTYPE html>
<html>
<head>
    <title>Daftar Fakultas - Telkom University</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Daftar Fakultas - Telkom University</h2>
    <table>
        <tr>
            <th>Kode</th>
            <th>Nama Fakultas</th>
        </tr>
        @foreach ($fakultas as $f)
        <tr>
            <td>{{ $f['kode'] }}</td>
            <td>{{ $f['nama_fakultas'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>


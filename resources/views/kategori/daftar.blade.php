<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <table border="1">
        <tr>
            <th> Nama </th>
            <th> Deskripsi </th>
        </tr>
        @foreach ($kategoris as $kategori) 
            <tr>
                <td>{{ $kategori->nama }}</td>
                <td>{{ $kategori->deskripsi }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
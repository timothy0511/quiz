<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <h1> Daftar Kategori</h1>
    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if(session('error'))
        <p style="color: red;">
            {{ session('error') }}
        </p>
    @endif
    <table border="1">
        <tr>
            <th> Nama </th>
            <th> Deskripsi </th>
            <th colspan = "2"> Aksi</th>
        </tr>
        @foreach ($kategoris as $kategori) 
            <tr>
                <td>{{ $kategori->nama }}</td>
                <td>{{ $kategori->deskripsi }}</td>
                <td> 
                    <form method = "POST" action = "{{ route('kategori.hapus', $kategori) }}">
                        @csrf
                        @method('DELETE')
                        <input type = "submit" value = "Hapus"/> 
                    </form>
                </td>
                <td>
                    <a href="{{ route('kategori.ubah', $kategori) }}">Ubah</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ url('/update-kategori', $kategori) }}">
        @csrf
        @method('PUT')
        <table> 
            <tr>
                <td>Nama: </td>
                <td> <input type="text" name="nama" value="{{ $kategori->nama }}"> </td>
            </tr>
            <tr>
                <td>Deskripsi: </td>
                <td> <textarea name="deskripsi">{{ $kategori->deskripsi }} </textarea> </td>
            </tr>
            <tr>
                <td colspan="2" align = "center"> <input type="submit" value="Update"> </td>
            </tr>
        </table>
    </form>
</body>
</html>
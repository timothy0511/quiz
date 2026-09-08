<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ url('/update-barang', $barang) }}">
        @csrf
        @method('PUT')
        <table> 
            <tr>
                <td>Nama: </td>
                <td> <input type="text" name="nama" value="{{ $barang->nama }}"> </td>
            </tr>
            <tr>
                <td>Harga: </td>
                <td> <textarea name="harga">{{ $barang->harga }} </textarea> </td>
            </tr>
            <tr>
                <td>Stok: </td>
                <td> <textarea name="stok">{{ $barang->stok }} </textarea> </td>
            </tr>
            <tr>
                <td>Kategori: </td>
                <td> 
                    <select name="kategori_id" value="{{ $barang->kategori_id }}"> 
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}"> {{ $kategori->nama }} </option>
                        @endforeach
                    </select> 
                </td>
            </tr>
            <tr>
                <td colspan="2" align = "center"> <input type="submit" value="Update"> </td>
            </tr>
        </table>
    </form>
</body>
</html>
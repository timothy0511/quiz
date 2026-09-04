<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        
        <!-- Lakukan perulangan untuk setiap data barang -->
        @foreach($barangs as $barang)
        <tr>
            <td>{{ $barang->nama }}</td>
            <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
            <td>{{ $barang->stok }}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>

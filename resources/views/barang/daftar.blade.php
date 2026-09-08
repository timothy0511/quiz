<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>
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
            <td> 
                <form method = "POST" action = "{{ route('barang.hapus', $barang) }}">
                    @csrf
                    @method('DELETE')
                    <input type = "submit" value = "Hapus"/> 
                </form>
            </td>
            <td>
                <a href="{{ route('barang.ubah', $barang) }}">Ubah</a>
            </td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>

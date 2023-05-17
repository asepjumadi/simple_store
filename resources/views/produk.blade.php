

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPLSTORE|PRODUK</title>
</head>

<body>
    <h1>Daftar Produk</h1>
    <h2>Tampilan Produk</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                {{-- <th>Gambar</th> --}}
                <th>Warna</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach ($produks as $prod)
                <tr>
                    <td>{{ $prod->nama_produk }}</td>
                    <td>{{ $prod->kategori }}</td>
                    <td>{{ $prod->deskripsi }}</td>
                    <td>{{ $prod->warna }}</td>

                    {{-- <td>{{ $prod->warna }}</td> --}}
                    <td>{{ $prod->nama_ukuran }}</td>
                    <td>{{ $prod->price }}</td>
                    @dump($prod->id)
                    <td>
                        
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</body>

</html>

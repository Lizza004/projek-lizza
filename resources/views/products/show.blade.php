<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <h2>{{ $product['name'] }}</h2>
    <p>Harga: Rp{{ number_format($product['price'], 0, ',', '.') }}</p>

    <a href="{{ url('/') }}">Kembali ke Daftar Produk</a>
</body>
</html>


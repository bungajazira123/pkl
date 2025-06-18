<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promo Barang</title>
</head>
<body>

    Barang = <b>{{ $barang }}</b> <br>
    Kode = <b>{{ $kode }}</b> <br><br>

    @if($barang && $kode)
        <p>Promo untuk <strong>{{ $barang }}</strong><br>
        Kode promo: <strong>{{ $kode }}</strong></p>
    
    @elseif($barang)
        <p>Promo untuk <strong>{{ $barang }}</strong></p>

    @else
        <p>Semua promo barang</p>
    @endif

</body>
</html>

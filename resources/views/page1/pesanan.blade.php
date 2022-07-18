<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h2>Selamat Datang Di Toko Bangunan<h2></center>

    hallo pesanan anda : <b>{{$a}}</b>
    @if ($a== 'pasir urug')
    <br> harga {{$a}} Rp.50000
    @elseif ($a== 'batako besar')
    <br> harga {{$a}} Rp.30000
    @elseif ($a== 'bata merah')
    <br> harga {{$a}} Rp.40000
    @elseif ($a== 'batu apung')
    <br> harga {{$a}} Rp.65000
    @else
    <br>
    list harga tidak anda
    @endif




</body>
</html>
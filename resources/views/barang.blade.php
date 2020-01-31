<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <center>Daftar Barang</center>
    @foreach ($data as $val)
    Nama : {{ $val->Nama_brg}}<br>
    Berat : {{ $val->Berat_brg}}<br>
    Deskripsi : {{ $val->Deskripsi}}<br>
    Jenis : {{ $val->Jenis_brg}}<br>
    Harga : {{ $val->Harga_brg}}<br>
    Stok : {{ $val->Stok}}<br>
    Penerima : {{ $val->Penerima}}<hr>
    @endforeach

</body>
</html>

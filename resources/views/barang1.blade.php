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
        Nama : {{ $data->Nama_brg}}<br>
        Berat : {{ $data->Berat_brg}}<br>
        Deskripsi : {{ $data->Deskripsi}}<br>
        Jenis : {{ $data->Jenis_brg}}<br>
        Harga : {{ $data->Harga_brg}}<br>
        Stok : {{ $data->Stok}}<br>
        Penerima : {{ $data->Penerima}}<hr>
</body>
</html>

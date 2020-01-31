<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Tabungan</center><br>
    @foreach ($tabungan as $data)
        Nama : {{$data->nama}}<br>
        Nis  : {{$data->nis}}<br>
        Kelas  : {{$data->kelas}}<br>
        Jumlah  : {{$data->jml}}<br>
        @if ($data->jml>25000)
            Paket : "C"
        @elseif($data->jml>10000)
            Paket : "B"
        @elseif($data->jml>=1000)
            Paket : "A"
        @else
            Paket "NULL"
        @endif
        <hr>
    @endforeach
</body>
</html>

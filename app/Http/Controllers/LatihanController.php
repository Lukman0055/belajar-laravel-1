<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function halo()
    {
        return 'Hallo Nama Saya Lukman';
    }

    public function pertambahan($a=null,$b=null)
    {
        if (!$a) {
            echo "masukan angka pertama";
        }
        elseif (!$b) {
            echo "masukan angka kedua";
        }
        elseif (isset($a) && isset($b)) {
        $jml = $a + $b;
        return "Hasil : $a + $b = $jml";
        }
    }

    public function perkalian($a=null,$b=null)
    {
        if (!$a) {
            echo "masukan angka pertama";
        }
        elseif (!$b) {
            echo "masukan angka kedua";
        }
        elseif (isset($a) && isset($b)) {
        $jml = $a * $a;
        return "Hasil : $a * $a = $jml";
        }
    }

    public function pengurangan($a=null,$b=null)
    {
        if (!$a) {
            echo "masukan angka pertama";
        }
        elseif (!$b) {
            echo "masukan angka kedua";
        }
        elseif (isset($a) && isset($b)) {
        $jml = $a - $b;
        return "Hasil : $a - $b = $jml";
        }
    }

    public function pembagian($a=null,$b=null)
    {
        if (!$a) {
            echo "masukan angka pertama";
        }
        elseif (!$b) {
            echo "masukan angka kedua";
        }
        elseif (isset($a) && isset($b)) {
        $jml = $a / $b;
        return "Hasil : $a : $b = $jml";
        }
    }

    public function loop()
    {
        $data= [['Nama'=>'Hari'],['Nama'=>'Memet'],['Nama'=>'Restu'],['Nama'=>'David']];
        // dd($data);
        foreach ($data as $val => $key) {
            echo "Nama : ".$key['Nama']."<hr>";
        }
    }

    public function loop1()
    {
        $data= [['Nama'=>'Hari','Kelas'=>'RPL 1','U_J'=>'55000'],
                ['Nama'=>'Kamir','Kelas'=>'RPL 2','U_J'=>'25000'],
                ['Nama'=>'Dobleh','Kelas'=>'RPL 3','U_J'=>'10000'],
                ['Nama'=>'Kabat','Kelas'=>'RPL 4','U_J'=>'15000'],
                ['Nama'=>'Kaji','Kelas'=>'RPL 5','U_J'=>'20000']
            ];
        // dd($data);
        foreach ($data as $val => $key) {
            if ($key['U_J']>=50000) {
                $tu= $key['U_J']*25/100;
                $total= $key['U_J']-$tu;
            }
            elseif ($key['U_J']>=25000) {
                $tu= $key['U_J']*15/100;
                $total= $key['U_J']-$tu;
            }
            elseif ($key['U_J']>=10000) {
                $tu= $key['U_J']*10/100;
                $total= $key['U_J']-$tu;
            }
            else {
                $tu = 0;
                $total = $key['U_J'];
            }
            echo    "Nama : ".$key['Nama'],
                    " <br>Kelas : ".$key['Kelas'],
                    " <br>Uang Jajan : ".$total,
                    " <br>Uang Tabungan : ".$tu,
                    "<br>Total Uang Jajan : ".$key['U_J'].
                    "<hr>";
        }
    }

    public function loop2()
    {
        $data= [['Nama'=>'Ramle','Agama'=>'Islam','Alamat'=>'Cisirung','Jenkel'=>'Laki Laki','Jabatan'=>'Manager','Jam_kerja'=>'220'],
                ['Nama'=>'Kamir','Agama'=>'Islam','Alamat'=>'Cisirung','Jenkel'=>'Laki Laki','Jabatan'=>'Sektretaris','Jam_kerja'=>'250'],
                ['Nama'=>'Dobleh','Agama'=>'Islam','Alamat'=>'Cisirung','Jenkel'=>'Laki Laki','Jabatan'=>'Staff','Jam_kerja'=>'200']
            ];
            foreach ($data as $val => $key) {
            if ($key['Jabatan'] == 'Manager') {
                $gaji = 5000000;
            }
            elseif ($key['Jabatan'] == 'Sekretaris') {
                $gaji = 3500000;
            }
            elseif ($key['Jabatan'] == 'Staff') {
                $gaji = 2500000;
            }
            if ($key['Jam_kerja']>= 250) {
                $bonus = $gaji/10;
            }
            elseif ($key['Jam_kerja']>= 200) {
                $bonus = $gaji*5/100;
            }
            else {
                $bonus = 0;
            }
            $gaji_b = $gaji+$bonus;
            $ptng = $gaji_b *2.5/100;
            $total = $gaji_b-$ptng;

        echo    "Nama : ".$key['Nama'],
        " <br>Agama: ".$key['Agama'],
        " <br>Alamat : ".$key['Alamat'],
        " <br>Jabatan : ".$key['Jabatan'],
        " <br>Jam Kerja : ".$key['Jam_kerja'],
        " <br>Gaji : ".$gaji_b,
        " <br>Bonus : ".$bonus,
        " <br>Potongan : ".$ptng,
        " <br>Gaji Total : ".$total.
        "<hr>";
            }
        }
    }

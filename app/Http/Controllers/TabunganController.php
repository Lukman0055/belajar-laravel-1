<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class TabunganController extends Controller
{
    public function index(){
        $tabungan = Tabungan::all();
        return $tabungan;
    }

    public function show($id)
    {
        $tabungan = Tabungan::find($id);
        return $tabungan;
    }

    public function store($n,$nm,$k,$j)
    {
        $tabungan = new Tabungan;
        $tabungan->nis = $n;
        $tabungan->nama = $nm;
        $tabungan->kelas = $k;
        $tabungan->jml = $j;
        $tabungan->save();
        return $tabungan;
    }

    public function edit($id,$n,$nm,$k,$j)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->nis = $n;
        $tabungan->nama = $nm;
        $tabungan->kelas = $k;
        $tabungan->jml = $j;
        $tabungan->save();
        return $tabungan;
    }

    public function delete($id)
    {
        $tabungan = Tabungan::find($id);
            $tabungan->delete();
    }

}

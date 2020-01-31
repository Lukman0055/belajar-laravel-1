<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang', compact('data'));
    }

    public function index1($id)
    {
        $data = Barang::findorFail($id);
        return view('barang1', compact('data'));
    }
}

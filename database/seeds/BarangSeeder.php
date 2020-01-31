<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['Nama_brg'=>'Laptop','Nomor_brg'=>'0202301','Berat_brg'=>'2kg','Deskripsi'=>'asus rog',
            'Jenis_brg'=>'Electronic','Harga_brg'=>3500000,'Stok'=>53,'Penerima'=>'Lukman'],
            ['Nama_brg'=>'Knalpot','Nomor_brg'=>'0202302','Berat_brg'=>'1kg','Deskripsi'=>'racing',
            'Jenis_brg'=>'Otomotif','Harga_brg'=>250000,'Stok'=>15,'Penerima'=>'Lukman'],
            ['Nama_brg'=>'Meja Belajar','Nomor_brg'=>'0202303','Berat_brg'=>'4kg','Deskripsi'=>'Kayu jati',
            'Jenis_brg'=>'Peralatan','Harga_brg'=>1500000,'Stok'=>34,'Penerima'=>'Lukman'],
            ['Nama_brg'=>'Track Pants','Nomor_brg'=>'0202304','Berat_brg'=>'1kg','Deskripsi'=>'checkboard',
            'Jenis_brg'=>'Fasion','Harga_brg'=>250000,'Stok'=>66,'Penerima'=>'Lukman'],
            ['Nama_brg'=>'Jam Tangan','Nomor_brg'=>'0202305','Berat_brg'=>'1kg','Deskripsi'=>'Swist',
            'Jenis_brg'=>'Aksesoris','Harga_brg'=>100000,'Stok'=>33,'Penerima'=>'Lukman'],
            ['Nama_brg'=>'Charger Asus','Nomor_brg'=>'0202306','Berat_brg'=>'1kg','Deskripsi'=>'asus',
            'Jenis_brg'=>'Electronic','Harga_brg'=>250000,'Stok'=>35,'Penerima'=>'Lukman'],
            ['Nama_brg'=>'SmartPhone','Nomor_brg'=>'0202307','Berat_brg'=>'1kg','Deskripsi'=>'Vivo',
            'Jenis_brg'=>'Electronic','Harga_brg'=>2500000,'Stok'=>43,'Penerima'=>'Lukman']
        ];
        // masukkan data ke database
        DB::table('barang')->insert($posts);
    }
}

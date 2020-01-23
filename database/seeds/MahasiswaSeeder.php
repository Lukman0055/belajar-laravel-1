<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['nama'=>'Lukman', 'nis'=>'0202301','jenkel'=>'Laki Laki','alamat'=>'Bandung',
            'tgl_lahir'=>'2003-06-15','umur'=>'16'],
            ['nama'=>'Romi', 'nis'=>'0202302','jenkel'=>'Laki Laki','alamat'=>'Pangalengan',
            'tgl_lahir'=>'2002-12-30','umur'=>'17'],
            ['nama'=>'Alfi', 'nis'=>'0202303','jenkel'=>'Laki Laki','alamat'=>'Bandung',
            'tgl_lahir'=>'2004-01-19','umur'=>'15'],
            ['nama'=>'Raihan', 'nis'=>'0202304','jenkel'=>'Laki Laki','alamat'=>'Bandung',
            'tgl_lahir'=>'2002-12-06','umur'=>'17'],
            ['nama'=>'Zaky', 'nis'=>'0202305','jenkel'=>'Laki Laki','alamat'=>'Bandung',
            'tgl_lahir'=>'2001-06-16','umur'=>'18'],
            ];
            // masukkan data ke database
            DB::table('siswa')->insert($posts);
    }
}

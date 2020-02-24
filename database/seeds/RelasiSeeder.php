<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Mahasiswa;
use App\Wali;
use App\Hobbi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobbis')->delete();
        DB::table('mahasiswa_hobbis')->delete();
// membuat data dosen
$dosen = Dosen::create([
    'nama' => 'abdul',
    'nip' => '12345678'
]);
$this->command->info('Data Dosen Berhasil Dibuat');

// membuat data mahasiswa
$mamat = Mahasiswa::create([
    'nama' => 'mamat',
    'nim' => '1010101',
    'id_dosen' => $dosen->id
]);
$upi = Mahasiswa::create([
    'nama' => 'upi',
    'nim' => '1010102',
    'id_dosen' => $dosen->id
]);
$pipi = Mahasiswa::create([
    'nama' => 'pipi',
    'nim' => '1010103',
    'id_dosen' => $dosen->id
]);
$this->command->info('Data Mahasiswa Berhasil Dibuat');

// membuat data wali
$amat = Wali::create([
    'nama' => 'amat',
    'id_mahasiswa' =>$mamat->id
]);
$amit = Wali::create([
    'nama' => 'amit',
    'id_mahasiswa' =>$upi->id
]);
$bait = Wali::create([
    'nama' => 'amet',
    'id_mahasiswa' =>$pipi->id
]);
$this->command->info('Data wali Berhasil Dibuat');

// membuat data hobi
$mancing = Hobbi::create([
    'hobbi' => 'Mancing keributan'
]);
$gaming = Hobbi::create([
    'hobbi' => 'game mobile'
]);
$mengaji = Hobbi::create([
    'hobbi' => 'Mengaji Al-Quran'
]);

// menampilkan Hobbi ke mahasiswa
$mamat->hobbi()->attach($mancing->id);
$mamat->hobbi()->attach($gaming->id);
$upi->hobbi()->attach($mancing->id);
$pipi->hobbi()->attach($mancing->id);
$this->command->info('Data hobi telah dibaut');
    }
}

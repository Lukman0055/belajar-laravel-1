<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbi extends Model
{
    protected $fillable = ['hobbi'];
    public $timetamp= true;
    public function Mahasiswa()
    {
        return $this->belongsToMany('App\Mahasiswa','mahasiswa_hobbis','id_hobbi','id_mahasiswa');
    }
}

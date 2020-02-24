<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    protected $fillable = ['nama','nim','id_dosen'];
    public $timetamp= true;

    public function Dosen()
    {
        return $this->belongsTo('App\Dosen','id_dosen');
    }
    public function Wali()
    {
        return $this->hasOne('App\Wali','id_mahasiswa');
    }
    public function hobbi()
    {
        return $this->belongsToMany('App\Hobbi','mahasiswa_hobbis','id_mahasiswa','id_hobbi');
    }

}

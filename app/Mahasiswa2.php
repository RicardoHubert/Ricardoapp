<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa2 extends Model
{
    //
    public $timestamps = false;

    public function prodi(){
    	return $this->belongsTo('App\Prodi');
    }
}



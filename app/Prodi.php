<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
    public function prodi(){
    	return  $this->hasMany('App\mahasiswa2');
    }
}

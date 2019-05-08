<?php

namespace App;
use DateTime;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa2 extends Model
{
    //
    public $timestamps = false;

    public function prodi(){
    	return $this->belongsTo('App\Prodi');
    }

    public function getStatusAttribute($status){
    	//$status = $this->attributes('status');
    switch ($status) {
    	case 1: return "Calon"; break;
    	case 2: return "Aktif"; break;
    	case 3: return "Cuti"; break;
   		case 4: return "Alumni"; break;
   		case 5: return "DO"; break;
    	default: return "No Status";
    		}
    }

    public function setTglLahirAttribute($value){
    	$this->attributes['tgl_lahir'] = DateTime::createFromFormat('d/m/Y', $value);
    }

    public function getTglLahirAttributes($value){
    	$date = new DateTime($value);
    	return $date->format('d/m/Y');
    }

}



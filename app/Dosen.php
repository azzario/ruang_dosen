<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Dosen extends Model implements Authenticatable
{
	use \Illuminate\Auth\Authenticatable;
    protected $table = 'dosen';

    public function getJkAttribute($value)
    {
    	if($value == 'l') {
    		return 'Laki-laki';
    	}
    	return 'Perempuan';
    }

    public function matkulDosen()
    {
    	return $this->hasMany('App\MatkulDosen', 'id_dosen');
    }
}

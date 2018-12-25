<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = [
    	'nama_matkul'
    ];

    public function matkulDosen()
    {
    	return $this->hasMany('App\MatkulDosen', 'id_matkul');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatkulDosen extends Model
{
    protected $table = 'matkul_dosen';
    protected $fillable = [
    	'id_dosen',
    	'id_matkul'
    ];

    public function dosen()
    {
    	return $this->belongsTo('App\Dosen', 'id_dosen');
    }

    public function matkul()
    {
    	return $this->belongsTo('App\Matkul', 'id_matkul');
    }
}

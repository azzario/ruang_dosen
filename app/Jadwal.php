<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = [
    	'id_kelas',
    	'id_dosen',
    	'id_matkul',
    	'label',
    	'sks',
    	'hari',
    	'jam_mulai'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}

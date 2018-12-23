<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = [
    	'id_kelas',
    	'label',
    	'sks',
    	'hari',
    	'jam_mulai'
    ];
}

<?php

use Illuminate\Database\Seeder;

class MatkulTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
        	[
        		'nama_matkul' => 'Algoritma'
        	],
        	[
        		'nama_matkul' => 'Logika Boolean'
        	],
        	[
        		'nama_matkul' => 'Arkom dan Orkom'
        	],
        	[
        		'nama_matkul' => 'Pengenalan Teknologi Informasi'
        	],
        	[
        		'nama_matkul' => 'Pancasila'
        	],
        	[
        		'nama_matkul' => 'Fisika'
        	],
        	[
        		'nama_matkul' => 'Agama'
        	],
        	[
        		'nama_matkul' => 'Kalkulus'
        	],
        ]);
    }
}

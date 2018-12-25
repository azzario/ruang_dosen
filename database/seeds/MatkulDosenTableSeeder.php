<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MatkulDosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul_dosen')->insert([
        	[
        		'id_dosen' => 1,
        		'id_matkul' => 1,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	],
        	[
        		'id_dosen' => 1,
        		'id_matkul' => 4,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]
        ]);
    }
}

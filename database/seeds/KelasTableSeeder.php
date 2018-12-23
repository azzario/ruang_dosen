<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
        	[
        		'id_prodi' => 1,
        		'id_wali' => 1,
        		'nama_kelas' => 'TI B',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]
        ]);
    }
}

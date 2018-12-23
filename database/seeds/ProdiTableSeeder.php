<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert([
        	[
        		'nama_prodi' => 'Teknik Informatika',
        		'alias' => 'TI',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
        	[
        		'nidn' => '1234567890',
        		'nama' => 'Azzario Razy Junaidi',
        		'password' => bcrypt('r3zpextor'),
        		'foto' => '1234567890.jpg',
        		'jabatan' => 'Dosen Pengajar',
        		'ttl' => 'Subang, 11 Mei 1999',
        		'alamat' => 'Gardu Langkap Desa Gunung Sari Kec.Pagaden Kab.Subang',
        		'telepon' => '08985485228',
        		'email' => 'azzariorazy17@gmail.com',
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]
        ]);
    }
}

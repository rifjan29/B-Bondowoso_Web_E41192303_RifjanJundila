<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'jember',
            'nomor_telp' => '08xxxx',
            'ttl' => '2000-11-26',
            'foto' => 'picture.png'
        ]);
    }
}

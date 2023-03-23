<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disini kita membuat fungsi menambahkan data pada database 'db_laravel' dengan nama table 'profile'
        DB::table('profile')->insert(
            [
                'address' => 'Jember',
                'nomer_tlp' => '089728372828',
                'ttl' => '2002-09-13',
                'foto' => 'fathur.png'
            ]
        );
    }
}
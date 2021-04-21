<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_admin')->insert([
            'username' => 'Bagas',
            'password_admin' => '12345678',
            'nama_lengkap' => 'Bagas Pratanto',
            'foto_admin' => 'gambar.png',
            ]);
    }
}

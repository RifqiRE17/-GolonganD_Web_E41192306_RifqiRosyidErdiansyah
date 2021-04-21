<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_user')->insert([
            'username' => 'Bagas',
            'password' => '12345678',
            'nama' => 'Bagas Pratanto',
            'umur' => '22',
            'jenis_kelamin' => 'pria',
            ]);//
    }
}

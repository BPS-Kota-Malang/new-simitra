<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 
            'role' => 'Admin',],
            ['id' => 2, 
            'role' => 'Pegawai',],
            ['id' => 3, 
            'role' => 'Mitra',],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Maykon Silveira',
                'username' => 'Msflix',
                'email' => 'cursos@maykonsilveira.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
             [
                'name' => 'vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendedor@maykonsilveira.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password')
             ],
             [
                'name' => 'cliente user',
                'username' => 'user',
                'email' => 'cliente@maykonsilveira.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'jericho',
                'fullname' => 'Jericho Rowdy',
                'email' => 'jericho@ski.com',
                'password' => Hash::make('password123'),
                'class_id' => 2, // sesuaikan dengan id kelas yang sudah ada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'jose',
                'fullname' => 'Jose',
                'email' => 'jose@ski.com',
                'password' => Hash::make('password123'),
                'class_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'josia',
                'fullname' => 'Josia',
                'email' => 'josia@ski.com',
                'password' => Hash::make('password123'),
                'class_id' => 2, // sesuaikan dengan id kelas yang sudah ada
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Juang',
                'fullname' => 'Juang Budianto',
                'email' => 'juang@ski.com',
                'password' => Hash::make('password123'),
                'class_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'justine',
                'fullname' => 'Justine Taniardi',
                'email' => 'justine@ski.com',
                'password' => Hash::make('password123'),
                'class_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

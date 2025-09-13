<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('classes')->insert([
            ['name' => 'XII TKJ 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'XII TKJ 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'XII TKJ 3', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

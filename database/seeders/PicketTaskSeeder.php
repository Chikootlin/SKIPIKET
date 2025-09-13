<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PicketTaskSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('picket_task')->insert([
            ['name' => 'Mop', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wipe Desk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Take Out Trash', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Close Window', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

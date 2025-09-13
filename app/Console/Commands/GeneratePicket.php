<?php

// app/Console/Commands/GeneratePicket.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PicketTask;
use Carbon\Carbon;

class GeneratePicket extends Command
{
    protected $signature = 'picket:generate {classId} {--month=} {--year=} {--perDay=5}';
    protected $description = 'Generate jadwal piket bulanan untuk kelas tertentu';

    public function handle()
    {
        $classId = $this->argument('classId');
        $month   = $this->option('month') ?? now()->month;
        $year    = $this->option('year') ?? now()->year;
        $perDay  = (int) $this->option('perDay');

        $tasks = PicketTask::all()->toArray();
        $users = User::where('class_id', $classId)->orderBy('id')->get()->toArray();

        if (empty($users)) {
            $this->error("❌ Tidak ada user di class_id {$classId}");
            return;
        }

        if (empty($tasks)) {
            $this->error("❌ Tidak ada task di tabel picket_task");
            return;
        }

        $days = ['Monday','Tuesday','Wednesday','Thursday','Friday'];
        $start = Carbon::createFromDate($year, $month, 1);
        $end   = $start->copy()->endOfMonth();

        // Bagi siswa per kelompok sesuai perDay
        $userChunks = array_chunk($users, $perDay);
        $dayIndex = 0;

        DB::transaction(function () use ($start, $end, $days, &$dayIndex, $userChunks, $tasks, $classId) {
            for ($date = $start; $date->lte($end); $date->addDay()) {
                $dayName = $date->format('l');
                if (!in_array($dayName, $days)) continue; // skip weekend

                if (!isset($userChunks[$dayIndex])) {
                    $dayIndex = 0; // reset kalau sudah habis
                }

                $group = $userChunks[$dayIndex];
                $shuffledTasks = $tasks;
                shuffle($shuffledTasks);

                foreach ($group as $j => $user) {
                    DB::table('picket')->insert([
                        'class_id'   => $classId,
                        'user_id'    => $user['id'],
                        'task_id'    => $shuffledTasks[$j % count($shuffledTasks)]['id'],
                        'date'       => $date->toDateString(),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                $dayIndex++;
            }
        });

        $this->info("✅ Jadwal piket untuk {$month}-{$year} kelas {$classId} berhasil dibuat!");
    }
}



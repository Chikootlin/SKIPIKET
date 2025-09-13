<?php

namespace App\Http\Controllers;

use App\Models\Picket;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = now()->toDateString();

        $pickets = Picket::with(['user', 'task'])
            ->whereDate('date', $today)
            ->take(4)
            ->get();

        // mapping task ke icon
        $taskIcons = [
            'Mop' => 'images/tasks/Mop.svg',
            'Wipe Desk' => 'images/tasks/WipeDesk.svg',
            'Take Out Trash' => 'images/tasks/TakeOutTrash.svg',
            'Close Window' => 'images/tasks/CloseWindow.svg',
        ];

        // tambahkan icon ke setiap picket
        foreach ($pickets as $picket) {
            $taskName = $picket->task->name ?? 'default';
            $picket->task_icon = $taskIcons[$taskName] ?? 'images/tasks/default.svg';
        }

        return view('main.dashboard', compact('pickets'));
    }
}

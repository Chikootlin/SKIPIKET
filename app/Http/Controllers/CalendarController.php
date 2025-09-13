<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picket;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index(){
        $now = Carbon::now();
        $startOfMonth = $now->copy()->startOfMonth();
        $daysInMonth = $now->daysInMonth;
        $totalCells = 35;

        $calendar = [];
        $dayCounter = 1;
        $nextMonthDay = 1;

        $pickets = Picket::with('user')
            ->whereMonth('date', $now->month)
            ->whereYear('date', $now->year)
            ->get()
            ->groupBy(fn($item) => Carbon::parse($item->date)->toDateString())
            ->map(fn($group) => $group->map(fn($p) => $p->user->fullname)->toArray())
            ->toArray();

        $firstDayOfWeek = ($startOfMonth->dayOfWeek + 6) % 7;

        for ($i = 0; $i < $totalCells; $i++) {
            $isCurrentMonth = $i >= $firstDayOfWeek && $dayCounter <= $daysInMonth;

            if ($isCurrentMonth) {
                $date = Carbon::create($now->year, $now->month, $dayCounter);
                $calendar[] = [
                    'day' => $dayCounter,
                    'isCurrentMonth' => true,
                    'isPast' => $date->lt($now->startOfDay()),
                    'isToday' => $date->isSameDay($now),
                    'dayOfWeek' => $date->dayOfWeek,
                    'pickets' => $pickets[$date->toDateString()] ?? [],
                ];
                $dayCounter++;
            } else {
                $calendar[] = [
                    'day' => null,
                    'isCurrentMonth' => false,
                    'isPast' => false,
                    'isToday' => false,
                ];
            }
        }


        return view('main.calendar', compact('calendar'));
    }
}

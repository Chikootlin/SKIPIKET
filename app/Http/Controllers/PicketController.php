<?php

namespace App\Http\Controllers;

use App\Models\Picket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PicketController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        // Week yang dipilih dari query (?week=2), default minggu sekarang
        $week = $request->get('week', $this->getWeekOfMonth(Carbon::now()));

        // Ambil jadwal si user di minggu yang dipilih
        $mySchedule = Picket::where('user_id', $user->id)
            ->whereMonth('date', Carbon::now()->month)
            ->get()
            ->first(function ($picket) use ($week) {
                return $this->getWeekOfMonth(Carbon::parse($picket->date)) == $week;
            });

        // Jika tidak ada jadwal user di minggu itu
        if (!$mySchedule) {
            return view('main.picket', [
                'pickets' => [],
                'week' => $week,
                'dayName' => null,
            ]);
        }

        // Ambil semua siswa di kelas yg sama & tanggal yg sama dgn user
        $pickets = Picket::with(['user', 'task'])
            ->where('class_id', $user->class_id)
            ->whereDate('date', $mySchedule->date)
            ->get();

        return view('main.picket', [
            'pickets' => $pickets,
            'week' => $week,
            'dayName' => Carbon::parse($mySchedule->date)->format('l'),
        ]);
    }

    private function getWeekOfMonth(Carbon $date)
    {
        $startOfMonth = $date->copy()->startOfMonth();
        return ceil(($startOfMonth->diffInDays($date) + 1) / 7);
    }
}

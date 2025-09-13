<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PicketTask extends Model
{
    protected $table = 'picket_task'; // karena kamu pakai nama tunggal
    protected $fillable = ['name'];   // sesuaikan dengan kolom yang ada
}

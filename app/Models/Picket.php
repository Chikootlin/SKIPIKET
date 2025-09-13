<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picket extends Model
{
    protected $table = 'picket';

    protected $fillable = [
        'class_id',
        'user_id',
        'task_id',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->belongsTo(PicketTask::class, 'task_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}

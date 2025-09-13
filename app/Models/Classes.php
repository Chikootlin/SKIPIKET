<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes'; // Nama tabel

    protected $fillable = [
        'name',
        'description',
    ];

    // Relasi ke User
    public function users()
    {
        // return $this->hasMany(User::class, 'class_id');   
    }
}

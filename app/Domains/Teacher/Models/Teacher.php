<?php

namespace App\Domains\Teacher\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\TeacherFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'salary'];
  

    protected static function newFactory()
    {
        return TeacherFactory::new();
    }
}

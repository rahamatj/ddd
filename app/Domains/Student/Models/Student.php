<?php

namespace App\Domains\Student\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\StudentFactory;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age'];
  

    protected static function newFactory()
    {
        return StudentFactory::new();
    }
}

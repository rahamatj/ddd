<?php

namespace App\Domains\Employee\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\EmployeeFactory;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'salary'];
  

    protected static function newFactory()
    {
        return EmployeeFactory::new();
    }
}

<?php

namespace App\Domains\Student\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{

    protected $fillable = ['name', 'id'];


    use HasFactory;
}

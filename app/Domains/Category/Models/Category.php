<?php

namespace App\Domains\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{

    protected $fillable = ['title', 'description'];


    use HasFactory;
}

<?php

namespace App\Domains\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\CategoryFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
  

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }
}

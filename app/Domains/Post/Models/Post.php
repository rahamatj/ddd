<?php

namespace App\Domains\Post\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];
  

    protected static function newFactory()
    {
        return PostFactory::new();
    }
}

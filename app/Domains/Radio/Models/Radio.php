<?php

namespace App\Domains\Radio\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\RadioFactory;

class Radio extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price'];
  

    protected static function newFactory()
    {
        return RadioFactory::new();
    }
}

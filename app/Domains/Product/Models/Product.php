<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price'];
  

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}

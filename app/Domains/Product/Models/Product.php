<?php

namespace App\Domains\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    protected $fillable = ['name', 'description', 'price'];


    use HasFactory;
}

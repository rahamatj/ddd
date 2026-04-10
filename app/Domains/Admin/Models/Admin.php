<?php

namespace App\Domains\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\AdminFactory;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age'];
  

    protected static function newFactory()
    {
        return AdminFactory::new();
    }
}

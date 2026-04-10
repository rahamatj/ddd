<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        
		\App\Domains\Post\Models\Post::factory()->count(20)->create();
		
		\App\Domains\Category\Models\Category::factory()->count(20)->create();
		
		\App\Domains\Student\Models\Student::factory()->count(20)->create();
		
		\App\Domains\Teacher\Models\Teacher::factory()->count(20)->create();
		
		\App\Domains\Product\Models\Product::factory()->count(30)->create();
		
		\App\Domains\Admin\Models\Admin::factory()->count(30)->create();
		// append
    }
}

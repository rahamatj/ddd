<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domains\Biker\Models\Biker;

class BikerFactory extends Factory
{
    protected $model = Biker::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'name' => fake()->word(),
			'salary' => fake()->randomNumber(),
        ];
    }
}

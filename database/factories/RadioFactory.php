<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domains\Radio\Models\Radio;

class RadioFactory extends Factory
{
    protected $model = Radio::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'name' => fake()->word(),
			'price' => fake()->randomNumber(),
        ];
    }
}

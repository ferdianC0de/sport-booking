<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MstSportCenter>
 */
class MstSportCenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName()." Sport Center",
            'latitude' => fake()->unique()->latitude(),
            'longtitude' => fake()->unique()->latitude(-90, 90),
            'address' => fake()->address(),
            'contact' => fake()->phoneNumber('081#########')
        ];
    }
}

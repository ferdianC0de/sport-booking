<?php

namespace Database\Factories;

use App\Models\MstSportCenter;
use App\Models\MstSportType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MstSportField>
 */
class MstSportFieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cd_sport_center' => MstSportCenter::inRandomOrder()->first(),
            'cd_sport_type' => MstSportType::inRandomOrder()->first(),
            'thumbnail' => 'default.jpg',
            'images' => [],
            'description' => 'Lapangan '.fake()->lastName(),
        ];
    }
}

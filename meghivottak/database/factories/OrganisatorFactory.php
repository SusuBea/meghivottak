<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Organisator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisator>
 */
class OrganisatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => $this -> faker-> text(),
            

        ];
    }
}

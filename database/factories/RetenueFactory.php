<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Retenue>
 */
class RetenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'employe_id' =>$this->faker->numberBetween(1, 10),
            'irpp' => $this->faker->randomFloat(2, 100, 1000),
            'annee_id' =>$this->faker->numberBetween(1, 3),

        ];
    }
}

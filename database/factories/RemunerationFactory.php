<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Remuneration>
 */
class RemunerationFactory extends Factory
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

            'employe_id' => $this->faker->numberBetween(1, 10),
            'salaire_base' => $this->faker->randomFloat(2, 1500, 5000),
            'prime_anciennete' => $this->faker->randomFloat(2, 200, 1000),
            'sursalaire' => $this->faker->randomFloat(2, 100, 800),
            'bonus' => $this->faker->randomFloat(2, 50, 500),
            'logement' => $this->faker->randomFloat(2, 200, 1000),
            'nourriture' => $this->faker->randomFloat(2, 50, 300),
            'deplacement' => $this->faker->randomFloat(2, 20, 150),
            'autre_avantage' => $this->faker->randomFloat(2, 0, 500),
            'annee_id' =>$this->faker->numberBetween(1, 3),

        ];
    }
}

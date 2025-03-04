<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cantine>
 */
class CantineFactory extends Factory
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

            'libelle' => $this->faker->word(),
            'montant' => $this->faker->randomFloat(2, 500, 10000),
            'annee_id'=> $this->faker->numberBetween(1, 3),

        ];
    }
}

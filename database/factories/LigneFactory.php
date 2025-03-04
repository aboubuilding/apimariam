<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ligne>
 */
class LigneFactory extends Factory
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
            'prix_minimal' => $this->faker->randomFloat(2, 10, 100),
            'prix_plafond' => $this->faker->randomFloat(2, 100, 500),
            'quartier_id' => $this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 3),
        

        ];
    }
}

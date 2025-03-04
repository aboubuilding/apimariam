<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FraisEcole>
 */
class FraisEcoleFactory extends Factory
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
            'montant' => $this->faker->randomFloat(2, 100, 1000),
            'type_paiement' => $this->faker->randomElement([1, 2]),
            'niveau_id' => $this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'periode_id' => $this->faker->numberBetween(1, 4),
           

        ];
    }
}

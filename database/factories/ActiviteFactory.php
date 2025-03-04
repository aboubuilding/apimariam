<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activite>
 */
class ActiviteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'libelle' => $this->faker->name(),
            'description' => $this->faker->name(),
            'montant' => $this->faker->numberBetween(1, 100),
            'type' => $this->faker->randomElement([1, 2,3 ]),
            'annee_id' => \App\Models\Annee::factory(),
            'niveau_id' => \App\Models\niveau::factory(),

            'etat' => 1,
            //
        ];
    }
}

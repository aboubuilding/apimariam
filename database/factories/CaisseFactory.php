<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caisse>
 */
class CaisseFactory extends Factory
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
            'solde_initial' => $this->faker->randomFloat(2, 1000, 100000),
            'solde_final' => $this->faker->randomFloat(2, 1000, 100000),
            'date_ouverture' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'date_cloture' => $this->faker->optional()->dateTimeBetween('now', '+1 year'),
            'statut' => $this->faker->randomElement([0, 1]),

            'Utilisateur_id'=> $this->faker->numberBetween(1, 10),
            'annee_id'=> $this->faker->numberBetween(1, 3),

            

        ];
    }
}

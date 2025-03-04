<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mouvement>
 */
class MouvementFactory extends Factory
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
            'beneficiaire' => $this->faker->name(),
            'motif' => $this->faker->paragraph(),
            'date_mouvement' => $this->faker->date(),
            'montant' => $this->faker->randomFloat(2, 10, 1000),
            'type_mouvement' => $this->faker->randomElement([1, 2]),
            'caisse_id' =>$this->faker->numberBetween(1, 30),
            'utilisateur_id' =>$this->faker->numberBetween(1, 10),
            'paiement_id' =>$this->faker->numberBetween(1, 50),
            'depense_id' =>$this->faker->numberBetween(1, 20),
            'annee_id' =>$this->faker->numberBetween(1, 3),
            'file' => $this->faker->word(),
            'statut_mouvement' => $this->faker->randomElement([1, 0]),
            'etat' => $this->faker->randomElement([1, 0]),

        ];
    }
}

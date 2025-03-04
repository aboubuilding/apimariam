<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
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

             'montant' => $this->faker->randomFloat(2, 1, 1000),
            'libelle' => $this->faker->word(),
            'paiement_id' =>  $this->faker->numberBetween(1, 10),
            'type_paiement_id' =>$this->faker->numberBetween(1, 10),
            'inscription_id' => $this->faker->numberBetween(1, 10),
            'frais_ecole_id' => $this->faker->numberBetween(1, 10),
            'statut_paiement' => $this->faker->randomElement([1, 2]),
            'annee_id' => $this->faker->numberBetween(1, 10),
            'caisse_id' => $this->faker->numberBetween(1, 10),
            'comptable_id' => $this->faker->numberBetween(1, 10),
            'caissier_id' => $this->faker->numberBetween(1, 10),
            'date_paiement' => $this->faker->date(),
            'date_encaissement' => $this->faker->date(),
           
        ];
    }
}

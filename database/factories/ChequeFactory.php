<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cheque>
 */
class ChequeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       return [

            'numero' => '00000',

            'emetteur' => $this->faker->name(),
            'annee_id' => \App\Models\Annee::factory(),
            'paiement_id' =>\App\Models\Paiement::factory(),
            'date_emission' => $this->faker->date(),
            'statut' => $this->faker->randomElement([0, 1]),
            'date_encaissement' => $this->faker->optional()->date(),
            'banque_id' => \App\Models\Banque::factory(),
            'etat' => 1,
        ];
    }
}

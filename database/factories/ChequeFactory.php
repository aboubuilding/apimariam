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
            'annee_id' => $this->faker->numberBetween(1, 3),
            'paiement_id' =>$this->faker->numberBetween(1, 10),
            'date_emission' => $this->faker->date(),
            'statut' => $this->faker->randomElement([0, 1]),
            'banque_id' => $this->faker->numberBetween(1, 5),
            
        ];
    }
}

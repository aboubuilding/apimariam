<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paiement>
 */
class PaiementFactory extends Factory
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

            'reference' => '0000000',
            'payeur' => $this->faker->name(),
            
            'telephone_payeur' => $this->faker->phoneNumber(),
            'date_paiement' => $this->faker->date(),
            'statut_paiement' => $this->faker->randomElement([1, 0]),
            'mode_paiement' => $this->faker->randomElement([1, 2, 3]), // Exemple de modes de paiement (1 = espèces, 2 = carte, etc.)
            'inscription_id' =>$this->faker->numberBetween(1, 30),
            'utilisateur_id' =>$this->faker->numberBetween(1, 10),
            'cheque_id' =>$this->faker->numberBetween(1, 10),
            'annee_id' =>$this->faker->numberBetween(1, 3),

            'etat' => $this->faker->randomElement([1, 0]),

        ];
    }
}

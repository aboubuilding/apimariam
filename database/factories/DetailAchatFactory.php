<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailAchat>
 */
class DetailAchatFactory extends Factory
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
             'achat_id' => $this->faker->numberBetween(1, 20),
            'produit_id' => $this->faker->numberBetween(1,30),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'quantite' => $this->faker->randomFloat(2, 1, 100),
            'prix_unitaire' => $this->faker->randomFloat(2, 1, 1000),
            'montant_achat' => $this->faker->randomFloat(2, 1, 10000),
            'etat' => $this->faker->randomElement([null, 0]),
        ];
    }
}

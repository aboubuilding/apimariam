<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailBon>
 */
class DetailBonFactory extends Factory
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

            'quantite' => $this->faker->randomFloat(2, 1, 100),
            'bon_id' => \App\Models\Bon::factory(),
            'annee_id' => \App\Models\Annee::factory(),
            'produit_id' =>\App\Models\Produit::factory(),
            'libelle' => $this->faker->word(),
            'etat' => $this->faker->randomElement([null, 0]),
        ];
    }
}

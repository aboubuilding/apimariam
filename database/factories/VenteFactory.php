<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vente>
 */
class VenteFactory extends Factory
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
            'date_vente' => $this->faker->date(),
            'quantite' => $this->faker->randomFloat(2, 1, 100),
            'montant' => $this->faker->randomFloat(2, 10, 500),
            'produit_id' =>$this->faker->numberBetween(1, 30),
            'personnel_id' =>$this->faker->numberBetween(1, 10),
            'boutique_id' =>$this->faker->numberBetween(1, 5),

        ];
    }
}

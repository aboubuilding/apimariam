<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
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

            'date_stock' => $this->faker->date(),
            'produit_id' =>$this->faker->numberBetween(1, 30),
            'magasin_id' =>$this->faker->numberBetween(1, 3),
            'boutique_id' =>$this->faker->numberBetween(1, 10),
            'bon_id' =>$this->faker->numberBetween(1, 3),
            'annee_id' =>$this->faker->numberBetween(1, 3),
            'quantite' => $this->faker->randomFloat(2, 1, 100),
            'type_mouvement' => $this->faker->numberBetween(1, 2),

        ];
    }
}

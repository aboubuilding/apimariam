<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
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
            'prix_unitaire_achat' => $this->faker->randomFloat(2, 1, 100),
            'prix_unitaire_vente' => $this->faker->randomFloat(2, 1, 200),
            'prix_unitaire_stock' => $this->faker->randomFloat(2, 1, 150),
            'photo' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'unite' => $this->faker->randomElement(['kg', 'g', 'litre', 'unité']),
            'unite_achat' => $this->faker->randomElement(['kg', 'g', 'litre', 'unité']),
            'equivalence' => $this->faker->randomFloat(2, 1, 5),
            'type_produit' => $this->faker->numberBetween(1, 5),
        ];
    }
}

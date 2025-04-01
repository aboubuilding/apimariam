<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    protected $model = Produit::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'prix_unitaire' => $this->faker->randomFloat(2, 1, 100), // Prix entre 1 et 100
            'photo' => $this->faker->imageUrl(),
            'type_produit_id' => $this->faker->numberBetween(1, 5), // Lier au type de produit existant
            'etat' => 1,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DetailVente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailVente>
 */
class DetailVenteFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = DetailVente::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'prix_unitaire' => $this->faker->randomFloat(2, 10, 500),
            'quantite' => $this->faker->numberBetween(1, 100),
            'vente_id' => $this->faker->randomNumber(),
            'produit_id' => $this->faker->randomNumber(),
            'etat' => 1,
        ];
    }
}

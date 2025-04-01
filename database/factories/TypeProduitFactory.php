<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TypeProduit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeProduit>
 */
class TypeProduitFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = TypeProduit::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),  // Libellé aléatoire
            'etat' => 1,  // Valeur par défaut pour l'état
        ];
    }
}

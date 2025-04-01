<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CategorieDepense;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategorieDepense>
 */
class CategorieDepenseFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = CategorieDepense::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->sentence(3),
            'etat' => 1,
        ];
    }
}

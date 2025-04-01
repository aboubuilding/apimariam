<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TypeService;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeService>
 */
class TypeServiceFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = TypeService::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'annee_id' => $this->faker->numberBetween(1, 10), // Simule un ID d'année existant
            'etat' => 1,
        ];
    }
}

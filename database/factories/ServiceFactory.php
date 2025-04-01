<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->sentence(3),
            'montant' => $this->faker->randomFloat(2, 100, 10000),
            'annee_id' => $this->faker->randomNumber(),
            'type_service_id' => $this->faker->randomNumber(),
            'etat' => 1,
        ];
    }
}
    
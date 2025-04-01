<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EleveService;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EleveService>
 */
class EleveServiceFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = EleveService::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'inscription_id' => $this->faker->numberBetween(1, 10), // Simule un ID d'inscription existant
            'service_id' => $this->faker->numberBetween(1, 5), // Simule un ID de service existant
            'date_inscription' => $this->faker->date(),
            'montant' => $this->faker->randomFloat(2, 100, 500), // Montant entre 100 et 500
            'taux_remise' => $this->faker->randomFloat(2, 0, 50), // Taux de remise entre 0% et 50%
            'annee_id' => $this->faker->numberBetween(1, 10), // Simule une année existante
            'type_service_id' => $this->faker->numberBetween(1, 5), // Simule un type de service existant
            'statut' => $this->faker->randomElement([0, 1]), // Statut : 0 = inactif, 1 = actif
            'etat' => 1,
        ];
    }
}

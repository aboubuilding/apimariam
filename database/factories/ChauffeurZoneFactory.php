<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ChauffeurZone;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChauffeurZone>
 */
class ChauffeurZoneFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = ChauffeurZone::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'chauffeur_id' => $this->faker->numberBetween(1, 10), // Simule un chauffeur existant
            'zone_id' => $this->faker->numberBetween(1, 5), // Simule une zone existante
            'date_prise_service' => $this->faker->date(),
            'date_arret_service' => $this->faker->date(),
            'statut' => $this->faker->randomElement([0, 1]), // Statut : 0 = inactif, 1 = actif
            'annee_id' => $this->faker->numberBetween(1, 10), // Simule une année
            'etat' => 1,
        ];
    }
}

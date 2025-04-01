<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\EcoleProvenance;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EcoleProvenance>
 */
class EcoleProvenanceFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = EcoleProvenance::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),  // Génère un mot aléatoire pour libelle
            'etat' => 1,  // Valeur par défaut pour l'état
        ];
    }
}

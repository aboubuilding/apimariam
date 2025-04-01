<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Validation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Validation>
 */
class ValidationFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Validation::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'statut' => $this->faker->randomElement([0, 1, 2]), // Exemple : 0 = rejeté, 1 = en attente, 2 = validé
            'utilisateur_id' => $this->faker->randomNumber(),
            'inscription_id' => $this->faker->randomNumber(),
            'annee_id' => $this->faker->randomNumber(),
            'commentaire' => $this->faker->sentence(),
            'date_validation' => $this->faker->date(),
            'etat' => 1,
        ];
    }
}

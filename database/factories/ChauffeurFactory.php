<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Chauffeur;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chauffeur>
 */
class ChauffeurFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Chauffeur::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numero_permis' => $this->faker->bothify('#####-####'),
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'telephone' => $this->faker->phoneNumber(),
            'date_naissance' => $this->faker->date(),
            'sexe' => $this->faker->randomElement([0, 1]), // 0 pour femme, 1 pour homme
            'type_permis' => $this->faker->randomElement([1, 2, 3]), // Exemples de types de permis
            'annee_id' => $this->faker->numberBetween(1, 10),
            'etat' => 1,
        ];
    }
}

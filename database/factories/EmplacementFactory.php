<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Emplacement;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emplacement>
 */
class EmplacementFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Emplacement::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'etat' => $this->faker->randomElement([0, 1]), // 0 pour inactif, 1 pour actif
        ];
    }
}

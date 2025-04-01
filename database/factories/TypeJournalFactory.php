<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TypeJournal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeJournal>
 */
class TypeJournalFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = TypeJournal::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'etat' => 1,
        ];
    }
}

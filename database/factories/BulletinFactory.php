<?php

namespace Database\Factories;

use App\Models\Bulletin;
use App\Models\Inscription;
use App\Models\Annee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bulletin>
 */
class BulletinFactory extends Factory
{
    protected $model = Bulletin::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'file' => $this->faker->filePath(), // Simule un chemin de fichier
            'type' => $this->faker->numberBetween(1, 3),
            'inscription_id' => $this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

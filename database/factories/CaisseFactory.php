<?php

namespace Database\Factories;

use App\Models\Caisse;
use App\Models\Annee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caisse>
 */
class CaisseFactory extends Factory
{
    protected $model = Caisse::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'solde_initial' => $this->faker->randomFloat(2, 1000, 50000),
            'statut' => $this->faker->numberBetween(0, 1),
            'utilisateur_id' => $this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 10),
            'etat' => 1
        ];
    }
}

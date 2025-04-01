<?php

namespace Database\Factories;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscriptionFactory extends Factory
{
    protected $model = Inscription::class;

    public function definition()
    {
        return [
            'date_inscription' => $this->faker->date(),
            'eleve_id' => $this->faker->numberBetween(1, 10),
            'cycle_id' => $this->faker->numberBetween(1, 3),
            'niveau_id' => $this->faker->numberBetween(1, 5),
            'last_niveau_id' => $this->faker->numberBetween(1, 5),
            'classe_id' => $this->faker->numberBetween(1, 10),
            'espace_id' => $this->faker->numberBetween(1, 3),
            'type_inscription' => $this->faker->randomElement([0, 1]),
            'statut' => $this->faker->randomElement([0, 1]),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'programme_provenance' => $this->faker->randomElement([0, 1]),
            'adresse_map' => $this->faker->address(),
            'quartier_id' => $this->faker->numberBetween(1, 10),
            'etat' => 1,
        ];
    }
}

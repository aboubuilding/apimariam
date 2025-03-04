<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inscription>
 */
class InscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'date_inscription' => $this->faker->date(),
            'eleve_id' =>$this->faker->numberBetween(1, 20),
            'cycle_id' =>$this->faker->numberBetween(1, 3),
            'niveau_id' =>$this->faker->numberBetween(1, 10),
            'last_niveau_id' =>$this->faker->numberBetween(1, 10),
            'classe_id' =>$this->faker->numberBetween(1, 10),
            'espace_id' => $this->faker->numberBetween(1, 10),
            'type_inscription' => $this->faker->randomElement([1, 2]),
            'statut_validation' => $this->faker->randomElement([0, 1]),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'parent_id' =>  $this->faker->numberBetween(1, 10),
            'taux_remise' => $this->faker->randomFloat(2, 0, 100),
            'motif_rejet' => $this->faker->text(),
            'date_validation' => $this->faker->dateTime(),
            'utilisateur_id' => $this->faker->numberBetween(1, 10),
            'programme_provenance' => $this->faker->randomElement([1, 2]),
            'frais_assurance' => $this->faker->randomFloat(2, 50, 500),
            'frais_inscription' => $this->faker->randomFloat(2, 100, 1000),
            'frais_examen' => $this->faker->randomFloat(2, 50, 300),
            'etat' => $this->faker->randomElement([1, 0]),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depense>
 */
class DepenseFactory extends Factory
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
            'libelle' => $this->faker->word(),
            'beneficaire' => $this->faker->name(),
            'motif_depense' => $this->faker->sentence(),
            'date_depense' => $this->faker->date(),
            'montant' => $this->faker->randomNumber(4),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'utilisateur_id' =>$this->faker->numberBetween(1, 10),
            'statut_depense' => $this->faker->randomElement([1, 2]),
        ];
    }
}

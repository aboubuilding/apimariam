<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periode>
 */
class PeriodeFactory extends Factory
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
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'statut' => $this->faker->randomElement([1, 0]),
           

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DepenseVoiture>
 */
class DepenseVoitureFactory extends Factory
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
            'date_depense' => $this->faker->date(),
            'montant' => $this->faker->randomFloat(2, 0, 5000),
            'voiture_id' => $this->faker->numberBetween(1, 10),
            'zone_id' => $this->faker->numberBetween(1, 10),
            'type_depense' => $this->faker->randomElement([1, 2]),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'etat' => $this->faker->randomElement([null, 0]),
        ];
    }
}

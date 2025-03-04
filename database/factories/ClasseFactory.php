<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
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
            'emplacement' => $this->faker->sentence(),
            'cycle_id' => $this->faker->numberBetween(1, 10),
            'niveau_id' => $this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 3),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Espace>
 */
class EspaceFactory extends Factory
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

            'nom_famille' => $this->faker->word(),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'etat' => $this->faker->randomElement([1, 0]),

        ];
    }
}

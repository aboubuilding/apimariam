<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SpecialiteEleve>
 */
class SpecialiteEleveFactory extends Factory
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

            'inscription_id' => $this->faker->numberBetween(1, 50),
            'specialite_id' => $this->faker->numberBetween(1, 8),
            'statut' => $this->faker->numberBetween(1, 3),
            'annee_id' => $this->faker->numberBetween(1, 3),

        ];
    }
}

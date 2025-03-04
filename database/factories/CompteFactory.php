<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compte>
 */
class CompteFactory extends Factory
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

            'email' => $this->faker->unique()->safeEmail(),
            'mot_passe' => $this->faker->password(),
            'statut_compte' => $this->faker->randomElement(['actif', 'inactif', 'suspendu']),
            'espace_id' => $this->faker->numberBetween(1, 10),
            'parent_id' => $this->faker->numberBetween(1, 10),
            'password_reset' => $this->faker->randomElement([0, 1]),

        ];
    }
}

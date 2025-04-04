<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
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

            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'login' => $this->faker->userName(),
            'email' => $this->faker->safeEmail(),
            'mot_passe' => $this->faker->password(),
            'photo' => $this->faker->imageUrl(),
            'role' => $this->faker->numberBetween(1, 5),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fournisseur>
 */
class FournisseurFactory extends Factory
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

            'raison_social' => $this->faker->company(),
            'nom_contact' => $this->faker->name(),
            'telephone_contact' => $this->faker->phoneNumber(),
            'adresse' => $this->faker->address(),
           

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
            'date_souscription' => $this->faker->date(),
            'adresse_map' => $this->faker->address(),
            'annee_id' => $this->faker->numberBetween(1,3),
            'souscription_id' => $this->faker->numberBetween(1, 5),
            'ligne_id' => $this->faker->numberBetween(1, 10),
            'zone_id' => $this->faker->numberBetween(1, 10),

        ];
    }
}

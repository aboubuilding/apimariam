<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
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

            'date_acquisition' => $this->faker->date(),
            'marque' => $this->faker->company(),
            'plaque' => $this->faker->bothify('??-####'),
            'nombre_place' => $this->faker->numberBetween(10, 15),

        ];
    }
}

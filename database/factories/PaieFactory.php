<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paie>
 */
class PaieFactory extends Factory
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

            'employe_id' =>$this->faker->numberBetween(1, 10),
            'periode_id' =>$this->faker->numberBetween(1, 5),
            'avantage_concede' => $this->faker->randomFloat(2, 1000, 5000),
            'prelevement_mensuel' => $this->faker->randomFloat(2, 100, 2000),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'etat' => $this->faker->randomElement([1, 0]),

        ];
    }
}

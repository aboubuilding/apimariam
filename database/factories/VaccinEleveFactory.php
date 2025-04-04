<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VaccinEleve>
 */
class VaccinEleveFactory extends Factory
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

            'eleve_id' =>$this->faker->numberBetween(1, 50),
            'vaccin_id' => $this->faker->numberBetween(1, 5),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deduction>
 */
class DeductionFactory extends Factory
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
            'employe_id' => $this->faker->numberBetween(1, 10),
            'cnss' => $this->faker->randomFloat(2, 0, 5000),
            'charges_familiale' => $this->faker->randomFloat(2, 0, 3000),
            'forfait_professionnel' => $this->faker->randomFloat(2, 0, 2000),
            'annee_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}

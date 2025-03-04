<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AssuranceFactory extends Factory
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
            'personnel_id' => $this->faker->numberBetween(1, 10),
            'date_souscription' => $this->faker->date(),
            'prelevement_mensuel' => $this->faker->randomFloat(2, 50, 500),
            'assurance_id' => $this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 3),
           
        ];
    }
}

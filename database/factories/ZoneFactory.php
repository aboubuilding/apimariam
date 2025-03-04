<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zone>
 */
class ZoneFactory extends Factory
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

            'libelle' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'employe_id'=>$this->faker->numberBetween(1, 10),
            'voiture_id' =>$this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 3),

        ];
    }
}

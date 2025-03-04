<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pret>
 */
class PretFactory extends Factory
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

            'livre_id' =>$this->faker->numberBetween(1, 5),
            'inscription_id' =>$this->faker->numberBetween(1, 20),
            'annee_id' =>$this->faker->numberBetween(1, 3),
            'date_pret' => $this->faker->date(),
            'date_retour_pret' => $this->faker->dateTimeBetween($this->faker->date(), '+30 days')->format('Y-m-d'),
            'date_retour_reel' => $this->faker->dateTimeBetween($this->faker->date(), '+60 days')->format('Y-m-d'),
            'statut_pret' => $this->faker->randomElement([1, 0]),
           

        ];
    }
}

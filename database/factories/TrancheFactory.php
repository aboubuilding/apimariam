<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tranche>
 */
class TrancheFactory extends Factory
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
            'date_butoire' => $this->faker->date(),
            'type_paiement_id' => $this->faker->numberBetween(1, 10),
            'taux' => $this->faker->numberBetween(1, 100),

        ];
    }
}

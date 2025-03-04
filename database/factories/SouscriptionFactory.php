<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Souscription>
 */
class SouscriptionFactory extends Factory
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
            'montant_prevu' => $this->faker->randomFloat(2, 100, 1000),
            'type_paiement' => $this->faker->numberBetween(1, 3),
            'cantine_id' =>$this->faker->numberBetween(1, 10),
            'ligne_id' =>$this->faker->numberBetween(1, 5),
            'livre_location_id' =>$this->faker->numberBetween(1, 10),
            'activite_id' =>$this->faker->numberBetween(1, 10),
            'annee_id' =>$this->faker->numberBetween(1, 3),
            'inscription_id' =>$this->faker->numberBetween(1, 30),
            'periode_id' =>$this->faker->numberBetween(1, 10),


        ];
    }
}

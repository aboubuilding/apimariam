<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocationLivre>
 */
class LocationLivreFactory extends Factory
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

            'marque_ordinateur' => $this->faker->company(),
            'numero_serie' => "000000",
            'nom_machine' => $this->faker->word(),
            'mot_passe' => $this->faker->password(),

            'inscription_id' =>$this->faker->numberBetween(1, 50),
            'annee_id' => $this->faker->numberBetween(1, 3),



        ];
    }
}

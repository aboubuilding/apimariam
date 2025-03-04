<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
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

            'auteur_id' =>  $this->faker->numberBetween(1, 10),
            'maison_edition_id' => $this->faker->numberBetween(1, 10),
            'categorie_livre_id' => $this->faker->numberBetween(1, 10),
            'annee_edition_id' => $this->faker->numberBetween(1, 10),
            'titre' => $this->faker->sentence(),
            'numero' => $this->faker->word(),
            'numero_isbn' => $this->faker->isbn13(),
            'etat' => $this->faker->randomElement([1, 0]),

        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategorieLivre>
 */
class BulletinFactory extends Factory
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
             'libelle' => $this->faker->name(),

             'file' => $this->faker->filePath(),

             'type' => $this->faker->randomElement([1, 2,3 ]),

             'inscription_id'=> $this->faker->numberBetween(1, 30),
             'annee_id'=> $this->faker->numberBetween(1, 3),

            



        ];
    }
}

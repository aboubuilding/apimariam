<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategorieLivre>
 */
class BoutiqueFactory extends Factory
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
             'responsable' => $this->faker->name(),
             'description' => $this->faker->paragraph(),
        ];
    }
}

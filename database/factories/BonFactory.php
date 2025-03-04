<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bon>
 */
class BonFactory extends Factory
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

            'reference' => $this->faker->unique()->bothify('BON-#####'),
            'date_bon' => $this->faker->date(),
            'type' => $this->faker->randomElement([1, 2, 3]),
            'nom_responsable' => $this->faker->name(),
            'nom_magasinier' => $this->faker->name(),
            'annee_id' =>$this->faker->numberBetween(1, 3),

        ];
    }
}

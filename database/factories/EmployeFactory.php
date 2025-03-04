<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
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


            'nom_prenom' => $this->faker->name(),
            'numero_cnss' => $this->faker->unique()->numerify('#######'),
            'quartier' => $this->faker->word(),
            'ville' => $this->faker->city(),
            'telephone' => $this->faker->phoneNumber(),
            'is_cnss' => $this->faker->boolean(),
            'is_amu' => $this->faker->boolean(),
            'nbre_enfant' => $this->faker->numberBetween(0, 5),
            'is_pension_validite' => $this->faker->boolean(),
            'taux_pension_validite' => $this->faker->numberBetween(0, 100),
            'nature_pension_validite' => $this->faker->randomFloat(2, 0, 5000),
            'salaire' => $this->faker->randomFloat(2, 1000, 10000),
            'profession_id' =>$this->faker->numberBetween(1, 10),
            'annee_id' => $this->faker->numberBetween(1, 3),
            'etat' => $this->faker->randomElement([1, 0]),
        ];
    }
}

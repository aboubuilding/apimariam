<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParentEleve>
 */
class ParentEleveFactory extends Factory
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

            'nom_parent' => $this->faker->lastName(),
            'prenom_parent' => $this->faker->firstName(),
            'telephone' => $this->faker->phoneNumber(),
            'profession' => $this->faker->jobTitle(),
            'espace_id' =>$this->faker->numberBetween(1, 8),
            'is_principal' => $this->faker->randomElement([1, 0]),
            'role' => $this->faker->randomElement([1, 2]), // Exemple de rôles, comme 1 pour principal et 2 pour secondaire
            'annee_id' =>$this->faker->numberBetween(1, 3),
            'nationalite_id' =>$this->faker->numberBetween(1, 5),
            'whatsapp' => $this->faker->phoneNumber(),
            'quartier_id' =>$this->faker->numberBetween(1, 10),
            'adresse' => $this->faker->address(),
            'email' => $this->faker->email(),
            

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\ParentEleve;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParentEleveFactory extends Factory
{
    protected $model = ParentEleve::class;

    public function definition()
    {
        return [
            'nom_parent' => $this->faker->lastName(),
            'prenom_parent' => $this->faker->firstName(),
            'telephone' => $this->faker->phoneNumber(),
            'profession' => $this->faker->jobTitle(),
            'espace_id' => $this->faker->numberBetween(1, 5),
            'is_principal' => $this->faker->randomElement([0, 1]),
            'role' => $this->faker->randomElement([1, 2]), // Exemple roles: 1 = Papa, 2 = Maman
            'nationalite_id' => $this->faker->numberBetween(1, 3),
            'whatsapp' => $this->faker->phoneNumber(),
            'quartier_id' => $this->faker->numberBetween(1, 10),
            'adresse' => $this->faker->address(),
            'email' => $this->faker->email(),
            'etat' => 1,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    protected $model = Eleve::class;

    public function definition()
    {
        return [
            'matricule' => $this->faker->unique()->word(),
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'prenom_usuel' => $this->faker->firstName(),
            'date_naissance' => $this->faker->date(),
            'lieu_naissance' => $this->faker->city(),
            'sexe' => $this->faker->randomElement([0, 1]),
            'nationalite_id' => $this->faker->numberBetween(1, 5),
            'ecole_provenance_id' => $this->faker->numberBetween(1, 10),
            'photo' => $this->faker->imageUrl(),
            'carte_identite' => $this->faker->imageUrl(),
            'naissance_eleve' => $this->faker->word(),
            'parent_id' => $this->faker->numberBetween(1, 50),
            'groupe_id' => $this->faker->numberBetween(1, 25),
            'certificat_medical' => $this->faker->word(),
            'nom_medecin' => $this->faker->name(),
            'numero_medecin' => $this->faker->phoneNumber(),
            'allergie' => $this->faker->text(),
        ];
    }
}

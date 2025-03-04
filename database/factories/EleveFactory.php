<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
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

            'matricule' => '000000',
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'prenom_usuel' => $this->faker->firstName(),
            'ecole_provenance' => $this->faker->company(),
            'date_naissance' => $this->faker->date(),
            'lieu_naissance' => $this->faker->city(),
            'sexe' => $this->faker->randomElement([ 1, 2]),
            'nationalite_id' => $this->faker->numberBetween(1, 10),
            'espace_id' => $this->faker->numberBetween(1, 10),
            'nom_medecin' => $this->faker->name(),
            'personne_prevenir' => $this->faker->optional()->text(),
            'photo' => $this->faker->imageUrl(),
            'carte_identite' => $this->faker->word(),
            'naissance' => $this->faker->word(),
            
            'certificat_medical' => $this->faker->word(),
            'numero_medecin' => $this->faker->phoneNumber(),
            'numero_personne_prevenir' => $this->faker->phoneNumber(),
            'lien_parente_personne' => $this->faker->randomElement([null, 1, 2]),
            'naissance_eleve' => $this->faker->word(),
            'allergie' => $this->faker->optional()->text(),
            'etat' => $this->faker->randomElement([null, 0]),
        ];
    }
}

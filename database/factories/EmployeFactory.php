<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    protected $model = Employe::class;

    public function definition()
    {
        return [
            'nom_prenom' => $this->faker->name(),
            'numero_cnss' => $this->faker->unique()->word(),
            'quartier' => $this->faker->word(),
            'ville' => $this->faker->city(),
            'telephone' => $this->faker->phoneNumber(),
            
            // Attributs booléens (0 ou 1)
            'is_cnss' => $this->faker->randomElement([0, 1]), // Indique si l'employé est inscrit à la CNSS (0 = non, 1 = oui)
            'is_amu' => $this->faker->randomElement([0, 1]),  // Indique si l'employé bénéficie de l'AMU (0 = non, 1 = oui)
            
            'nbre_enfant' => $this->faker->numberBetween(0, 5), // Nombre d'enfants de l'employé (valeur entre 0 et 5)
            
            // Attributs liés à la pension de l'employé
            'is_pension_validite' => $this->faker->randomElement([0, 1]), // Indique si la validité de la pension est active (0 = non, 1 = oui)
            'taux_pension_validite' => $this->faker->randomFloat(2, 0, 1), // Taux de validité de la pension (valeur décimale entre 0 et 1)
            'nature_pension_validite' => $this->faker->randomFloat(2, 100, 500), // Montant de la pension validée (valeur entre 100 et 500)

            'salaire' => $this->faker->randomFloat(2, 1000, 5000), // Salaire de l'employé (valeur aléatoire entre 1000 et 5000)

            'profession_id' => $this->faker->numberBetween(1, 5), // ID de la profession de l'employé (clé étrangère)
            'annee_id' => $this->faker->numberBetween(1, 3), // ID de l'année de l'employé (clé étrangère)
        ];
    }
}

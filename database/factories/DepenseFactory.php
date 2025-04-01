<?php

namespace Database\Factories;

use App\Models\Depense;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Depense>
 */
class DepenseFactory extends Factory
{
    protected $model = Depense::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->uuid(),
            'beneficaire' => $this->faker->name(),
            'telephone_beneficiaire' => $this->faker->phoneNumber(),
            'commentaire' => $this->faker->text(),
            'date_depense' => $this->faker->date(),
            'annee_id' => $this->faker->numberBetween(1, 3),  
            'utilisateur_id' => $this->faker->numberBetween(1, 5),  
            'statut_depense' => $this->faker->randomElement([0, 1]), 
            'fournisseur_id' => $this->faker->numberBetween(1, 5),  
            'categorie_depense_id' => $this->faker->numberBetween(1, 3),  
           
        ];
    }
}

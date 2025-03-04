<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achat>
 */
class AchatFactory extends Factory
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
            'date_achat' => $this->faker->date(),
            'date_livraison' => $this->faker->date(),
            'nom_acheteur' => $this->faker->name(),
            'reference' => $this->faker->unique()->bothify('REF-#####'),
            'bon_commande' => $this->faker->unique()->bothify('BC-#####'),
            'commentaire' => $this->faker->sentence(),
            'fournisseur_id' =>\App\Models\Fournisseur::factory(),
            'annee_id' => \App\Models\Annee::factory(),
            'statut_paiement' => $this->faker->randomElement([0, 1]),
            'statut_livraison' => $this->faker->randomElement([0, 1]),
            'etat' => 1,
        ];
    }
}

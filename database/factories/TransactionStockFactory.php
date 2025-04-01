<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TransactionStock;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransactionStock>
 */
class TransactionStockFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = TransactionStock::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'produit_id' => $this->faker->randomNumber(),  // ID aléatoire pour le produit
            'annee_id' => $this->faker->year(),  // Année aléatoire
            'boutique_id' => $this->faker->randomNumber(),  // ID aléatoire pour la boutique
            'magasin_id' => $this->faker->randomNumber(),  // ID aléatoire pour le magasin
            'quantite' => $this->faker->randomFloat(2, 1, 100),  // Quantité aléatoire entre 1 et 100
            'commentaire' => $this->faker->text(),  // Commentaire aléatoire
            'date_transaction' => $this->faker->date(),  // Date de la transaction
            'type_transaction' => $this->faker->randomElement([1, 2]),  // Type de transaction (1 ou 2)
            'etat' => 1,  // Valeur par défaut pour l'état
        ];
    }
}

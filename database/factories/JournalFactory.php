<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Journal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Journal>
 */
class JournalFactory extends Factory
{
    /**
     * Le nom du modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Journal::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'caisse_id' => $this->faker->randomNumber(),
            'annee_id' => $this->faker->randomNumber(),
            'utilisateur_id' => $this->faker->randomNumber(),
            'type_journal_id' => $this->faker->randomNumber(),
            'montant' => $this->faker->randomFloat(2, 100, 10000),
            'description' => $this->faker->sentence(10),
            'mode_paiement' => $this->faker->randomElement([1, 2, 3]), // Exemple : 1 = Espèces, 2 = Carte, 3 = Virement
            'type_transaction' => $this->faker->randomElement([1, 2]), // Exemple : 1 = Dépôt, 2 = Retrait
            'date_journal' => $this->faker->date(),
            'etat' => 1,
        ];
    }
}

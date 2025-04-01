<?php

namespace Database\Factories;

use App\Models\Achat;
use App\Models\Annee;
use App\Models\Fournisseur;
use App\Models\TypeJournal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Achat>
 */
class AchatFactory extends Factory
{
    protected $model = Achat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reference' => strtoupper($this->faker->unique()->bothify('ACH-#####')),
            'date_achat' => $this->faker->date(),
            'statut' => $this->faker->randomElement([0, 1]), // 0: en attente, 1: validé
            'annee_id' => Annee::factory(),
            'nom_acheteur' => $this->faker->name(),
            'fournisseur_id' => Fournisseur::factory(),
            'type_journal_id' => TypeJournal::factory(),
            'etat' => 1
        ];
    }
}

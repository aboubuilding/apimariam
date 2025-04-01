<?php

namespace Database\Factories;

use App\Models\Vente;
use Illuminate\Database\Eloquent\Factories\Factory;

class VenteFactory extends Factory
{
    protected $model = Vente::class;

    public function definition()
    {
        return [
            'date_vente' => $this->faker->date(),
            'statut' => $this->faker->randomElement([0, 1]),
            'annee_id' => $this->faker->randomNumber(),
            'boutique_id' => $this->faker->randomNumber(),
            'client_id' => $this->faker->randomNumber(),
            'type_journal_id' => $this->faker->randomNumber(),
           
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Asurance;
use App\Models\Annee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asurance>
 */
class AsuranceFactory extends Factory
{
    protected $model = Asurance::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_assureur' => $this->faker->company(),
            'police_assurance' => $this->faker->regexify('[A-Z]{2}[0-9]{6}'),
            'montant_annuel' => $this->faker->randomFloat(2, 500, 5000),
            'annee_id' => \App\Models\Annee::factory(),
           
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'montant' => $this->faker->randomFloat(2, 100, 1000), 
            'libelle' => $this->faker->word(),
            'paiement_id' => $this->faker->numberBetween(1, 5),  
            'type_frais_id' => $this->faker->numberBetween(1, 3),  
            'inscription_id' => $this->faker->numberBetween(1, 3),
            
        ];
    }
}

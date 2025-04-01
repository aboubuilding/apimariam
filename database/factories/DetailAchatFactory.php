<?php

namespace Database\Factories;

use App\Models\DetailAchat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailAchat>
 */
class DetailAchatFactory extends Factory
{
    protected $model = DetailAchat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantite' => $this->faker->numberBetween(1, 100),  
            'prix_unitaire' => $this->faker->numberBetween(10, 5000), 
            'achat_id' => $this->faker->numberBetween(1, 5), 
            'produit_id' => $this->faker->numberBetween(1, 5), 
            
        ];
    }
}

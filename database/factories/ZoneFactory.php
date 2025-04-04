<?php

namespace Database\Factories;

use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    protected $model = Zone::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'annee_id' => $this->faker->randomNumber(),
            
        ];
    }
}

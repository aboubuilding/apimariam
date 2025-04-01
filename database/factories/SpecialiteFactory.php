<?php

namespace Database\Factories;

use App\Models\Specialite;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialiteFactory extends Factory
{
    protected $model = Specialite::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word(),
            'etat' => 1,
        ];
    }
}

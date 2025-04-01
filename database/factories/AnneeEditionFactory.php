<?php

namespace Database\Factories;

use App\Models\AnneeEdition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnneeEdition>
 */
class AnneeEditionFactory extends Factory
{
    protected $model = AnneeEdition::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'libelle' => 'Édition ' . $this->faker->year(),
          
        ];
    }
}

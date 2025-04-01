<?php

namespace Database\Factories;

use App\Models\Assure;
use App\Models\Employe;
use App\Models\Asurance;
use App\Models\Annee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assure>
 */
class AssureFactory extends Factory
{
    protected $model = Assure::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employe_id' => \App\Models\Employe::factory(),
            'date_souscription' => $this->faker->date(),
            'prelevement_mensuel' => $this->faker->randomFloat(2, 50, 500),
            'assurance_id' => \App\Models\Asurance::factory(),
            'annee_id' => \App\Models\Annee::factory(),
           
        ];
    }
}

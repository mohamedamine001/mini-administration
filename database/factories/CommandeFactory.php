<?php

namespace Database\Factories;
use App\Models\Client;
use App\Models\Commande;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'price' => $this->faker->randomDigit,
            'client_id' => Client::factory(1)->create()->first()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "DNI"=> $this->faker->bothify('########?'),
            "nombre"=> $this->faker->firstName(),
            "apellidos"=> $this->faker->lastName(),
            "telefono"=> $this->faker->phoneNumber(),
            "email"=> $this->faker->email(),
        ];
    }
}

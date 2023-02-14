<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Order::class;


    public function definition()
    {
        return [
            "solicitante"=> $this->faker->name(),
            "fecha"=> $this->faker->date('Y_m_d'),
            "descripcion"=> $this->faker->sentence(6),
           // "client_id"=> Client::inRandomOrder()->first()->id
        ];
    }
}

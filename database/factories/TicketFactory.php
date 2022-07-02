<?php

namespace Database\Factories;

use App\Models\Airline;
use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'route_id' => Route::factory(),
            'airline_id' => Airline::factory(),
            'code' => $this->faker->unique()->slug,
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'scales' => $this->faker->numberBetween(1,10),
        ];
    }
}

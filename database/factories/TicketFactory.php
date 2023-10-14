<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'description' => $this->faker->text($maxNbChars = 400),
            'status' => $this->faker->randomElement([0,1,2,3]),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 14),
        ];
    }
}

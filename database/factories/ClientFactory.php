<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'f_name' => fake()->name(),
            'l_name' => fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'nationality' => fake()->name(),
            'client_kind' => 'bbb',
            'id_kind' => 'bbb',
            'id_copy' => 'bbb',
            'visa_number' => 'bbb',
            'sign_in' => now()->format('Y-m-d'),
            'entry_time' => now()->format('H:i:s'),
            'duration' => 'bbb',
            'arrival_destination' => 'bbb',
            'slug' => fake()->slug,
        ];
    }
}

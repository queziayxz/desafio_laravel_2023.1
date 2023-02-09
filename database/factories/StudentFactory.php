<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'birth_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'register_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'pay_day' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'expiration_date' => fake()->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}

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
    public function definition(): array
    {
        return [
            'stu_id'=>431,
            'name'=>fake()->name(),
            'age'=>fake()->numberBetween(15,20),
            'email'=>fake()->email(),
            'mobile'=>fake()->phoneNumber(),
            'city'=>fake()->city()
        ];
    }
}

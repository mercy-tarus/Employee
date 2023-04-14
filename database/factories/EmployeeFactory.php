<?php

namespace Database\Factories;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    protected $model= Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(rand(5, 15), true),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'salary' => $this->faker->randomNumber(),
            'designation' => fake()->randomElement(),
            'date_of_birth' => $this->faker->dateTime()->format('Y-m-d H:i:s')
            // 'date_of_birth' => $this->faker->dateTimeBetween('1990-01-01', '2023-12-31')->format('d/m/Y'),
        ];
    }
}

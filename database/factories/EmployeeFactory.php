<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'title'=>$this->faker->jobTitle(),
            'gender'=>$this->faker->randomElement(['male','female']),
            'office'=>$this->faker->numberBetween(1,20),
            'presence'=>$this->faker->randomElement(['present','absent']),
            'departureTime'=>$this->faker->time,
            'returnTime'=>$this->faker->time,
            'reason'=>$this->faker->realText(10),
            'phone'=>$this->faker->phoneNumber(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use PharIo\Manifest\Email;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Info>
 */
class InfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email'=>$this->faker->email,
            'address'=>$this->faker->address,
            'phone'=>$this->faker->phoneNumber(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->name().'@gmail.com',
            'password' => $this->faker->password(),
            'contact' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'photo' => $this->faker->image(null, 640, 480),
        ];
    }
}

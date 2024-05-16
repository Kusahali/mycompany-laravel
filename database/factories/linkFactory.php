<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class linkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'link' => $this->faker->url(),
            'email' => $this->faker->email(),
            'hotline' => $this->faker->phoneNumber(),
            'banquyen' => '© ' . date('Y') . ' Your Company Name',
        ];
    }
}

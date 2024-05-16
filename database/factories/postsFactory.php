<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class postsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Menu' => $this -> faker -> name(),
            'Danhmucbaiviet' => $this -> faker -> name(),
            'Baiviet' => $this->faker->Paragraph(),
            'Logodoitac' => $this->faker->imageurl(),
            'link_id' => random_int(1,10),
        ];
    }
}

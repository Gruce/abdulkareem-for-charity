<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->text(),
            'image_path' => $this->faker->imageUrl(),
            'file_path' => $this->faker->imageUrl(),
            'target' => $this->faker->numberBetween(100000, 10000000),
            'received_price' => $this->faker->numberBetween(1000, 10000),


            
        ];
    }
}

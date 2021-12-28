<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => $this->faker->url(),
            'description' => $this->faker->paragraph(),
            'url_image' => $this->faker->imageUrl(),
            'status' => $this->faker->boolean(),
        ];
    }
}

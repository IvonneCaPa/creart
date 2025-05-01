<?php

namespace Database\Factories;

use App\Models\Event;
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
    public function definition(): array
    {
        return [
            'title' => substr($this->faker->sentence(), 0, 20),
            'description' => $this->faker->paragraph(),
            'site' => substr($this->faker->sentence(), 0, 45),
            'dateTime' => $this->faker->dateTime(),
        ];
    }
}
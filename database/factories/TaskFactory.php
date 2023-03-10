<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(100),
            'isCompleted' => $this->faker->numberBetween(0, 1),
            'dueDate' => $this->faker->date(),
        ];
    }
}

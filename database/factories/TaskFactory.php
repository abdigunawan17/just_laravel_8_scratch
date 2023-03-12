<?php

namespace Database\Factories;

//use App\Models\Task;
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

    //protected $model = Task::class;

    public function definition()
    {
        return [
            'list' => fake()->sentence(),
            'nama' => fake()->sentence(),
            'mark' => rand(0, 1)
        ];
    }
}

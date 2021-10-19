<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            // 'is_finished' => rand(0,1),
            'position' => $this->faker->numerify('#'),
            'completed_at' => $this->faker->dateTimeBetween('-1 week', '-3 days'),
        ];
    }
}

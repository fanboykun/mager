<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(2),
            'finished_at' => $this->faker->dateTimeBetween('-3 days', 'now'),
            'last_task_completed_at' => $this->faker->dateTimeBetween('-1 week', '-3 days'),
            'due_date' => $this->faker->dateTimeBetween('+3 days', '+1 week'),
        ];
    }
}

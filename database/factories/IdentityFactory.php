<?php

namespace Database\Factories;

use App\Models\Identity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IdentityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Identity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
                'status' => $this->faker->realText(10,1),
                'instagram' => $this->faker->userName(),
                'phone' => $this->faker->phoneNumber(),
                'address' => $this->faker->address(),
            ];
    }
}

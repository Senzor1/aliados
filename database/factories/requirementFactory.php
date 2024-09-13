<?php

namespace Database\Factories;

use App\Models\requirement;
use Illuminate\Database\Eloquent\Factories\Factory;

class requirementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = requirement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence()
        ];
    }
}

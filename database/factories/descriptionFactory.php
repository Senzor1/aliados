<?php

namespace Database\Factories;

use App\Models\description;
use Illuminate\Database\Eloquent\Factories\Factory;

class descriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = description::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->paragraph()
        ];
    }
}

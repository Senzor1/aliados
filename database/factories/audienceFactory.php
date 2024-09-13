<?php

namespace Database\Factories;

use App\Models\audience;
use Illuminate\Database\Eloquent\Factories\Factory;

class audienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = audience::class;

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

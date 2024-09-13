<?php

namespace Database\Factories;

use App\Models\course;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\price;
use App\Models\level;
use App\Models\category;

class courseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([course::BORRADOR, course::REVISION, course::PUBLICADO]),
            'slug' => str::slug($title),
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'level_id' => level::all()->random()->id,
            'category_id' => category::all()->random()->id,
            'price_id' => price::all()->random()->id,

        ];
    }
}

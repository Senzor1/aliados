<?php

namespace Database\Factories;

use App\Models\lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class lessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'url'  => 'https://youtu.be/VzaHgy1nnp0',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/dy9F0FlWpTk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'platform_id' => 1
        ];
    }
}

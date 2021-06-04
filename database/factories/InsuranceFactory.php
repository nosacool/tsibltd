<?php

namespace Database\Factories;

use App\Models\Insurance;
use Illuminate\Database\Eloquent\Factories\Factory;

class InsuranceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Insurance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'url'=> $this->faker->unique()->text(7),
            'name'=> $this->faker->unique()->text(7),
            'intro'=> $this->faker->unique()->text(7),
            'right-header'=> $this->faker->unique()->text(17),
            'right-info' => $this->faker->sentence(),
            'left-big-image'=> $this->faker->image('public/images',640,480, null, false),
            'left-header'=> $this->faker->word(),
            'left-info'=> $this->faker->unique()->sentence(),
            'right-big-image'=> $this->faker->image('public/images',640,480, null, false)
        ];
    }
}

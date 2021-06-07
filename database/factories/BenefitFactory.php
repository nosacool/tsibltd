<?php

namespace Database\Factories;

use App\Models\Benefit;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class BenefitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Benefit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'insurances_id'=> '2',
            'title'=>$this->faker->text(20),
            'info'=>$this->faker->text(50)
            //
        ];
    }
}

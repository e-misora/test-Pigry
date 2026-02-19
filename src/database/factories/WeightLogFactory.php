<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WeightLog;
use App\Models\User;

class WeightLogFactory extends Factory
{
    protected $model=WeightLog::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'date'=>$this->faker->date(),
            'weight'=>$this->faker->randomFloat(1,1,99),
            'calories'=>$this->faker->randomNumber(3, true),
            'exercise_time'=>$this->faker->time(),
            'exercise_content'=>$this->faker->realText(120)
        ];
    }
}

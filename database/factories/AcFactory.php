<?php

namespace Database\Factories;

use App\Models\Ac;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ac::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
      return [
        'user_id' => rand(1,10),
        'acid' => $this->faker->sentence,
        'type' => $this->faker->slug,
        'size' => $this->faker->text(500)
      ];
    }
  
}

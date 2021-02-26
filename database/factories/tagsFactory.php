<?php

namespace Database\Factories;
//se manda a traer nuesto modelo tags
use App\Models\tags;

use Illuminate\Database\Eloquent\Factories\Factory;

class tagsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tags::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->word
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = categories::count();

        return [
            //
            'category_id' => $this->faker->numberBetween(1, $categories),
            'tittle' => $this->faker->name(),
            'url_clean' => Str::random(10).'_'.Str::random(5),
            'content' => $this->faker->name(),
            'posted' => $this->faker->randomElement(['yes','no']),
        ];
    }
}

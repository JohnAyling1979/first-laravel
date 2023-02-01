<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostMetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => $this->faker->unique()->numberBetween(1, 100),
            'meta_description' => $this->faker->word(),
            'meta_keywords' => $this->faker->word(),
            'meta_robots' => $this->faker->word(),
        ];
    }
}

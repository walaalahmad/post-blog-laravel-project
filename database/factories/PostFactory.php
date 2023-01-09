<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>Category::factory(),
            'user_id'=>User::factory(),
            'title'=>$this->faker->sentence,
            // 'slug'=>$this->faker->slug,
            'excerpt' => '<p>' . implode( '</p><p>' ,$this->faker->paragraphs(2)).'</p>',
            'body' => '<p>' . implode( '</p><p>' ,$this->faker->paragraphs(6)).'</p>',

        ];
    }
}

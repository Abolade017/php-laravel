<?php

namespace Database\Factories;

use App\Models\comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id'=>Post::factory(),
            'user_id'=>Post::factory(),
            'body'=>$this->faker->paragraph( ),
        ];
    }
}

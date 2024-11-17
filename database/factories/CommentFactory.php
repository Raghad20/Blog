<?php

namespace Database\Factories;


use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users=User::pluck('id');
        $posts=Post::pluck('id');
        return [
            'content' => fake()->realText(),
            'post_id'=>$posts->random(),
            'user_id'=>$users->random(),
        ];
    }
}

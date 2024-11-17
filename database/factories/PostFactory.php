<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users=User::where('is_admin',1)->pluck('id');
        $categories=Category::pluck('id');
        return [
            'title' => fake()->sentence(),
            'content' => fake()->text(),
            'image' => 'public/ASUS.JPG',
            'category_id' => $categories->random(),
            'user_id'=>$users->random(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(7),
            'content' => $this->faker->text(300),
            'image' => $this->faker->image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = false,),
            'likes' => rand(0,1000),
            'is_published' => rand(0,1),
            'category_id' => Category::get()->random()->id
        ];
    }
}

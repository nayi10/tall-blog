<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
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
        $title = $this->faker->sentence(15);
        return [
            'category' => $this->faker->word(),
            'body' => $this->faker->paragraphs(15, true),
            'title' => $title,
            'excerpt' => $this->faker->sentences(3, true),
            'featured_image' => "post.png",
            'published_date' => $this->faker->date(),
            'slug' => Str::slug($title),
            'user_id' => 1,
        ];
    }

    /**
     * Indicates the post is published.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_published' => true,
                'published_date' => now(),
            ];
        });
    }
}

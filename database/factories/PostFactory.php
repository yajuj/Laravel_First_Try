<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
  protected $model = Post::class;
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'author' => $this->faker->name(),
      'title' => $this->faker->sentence(10),
      'description' => $this->faker->text(100),
      'content' => $this->faker->text(),
      'image' => $this->faker->imageUrl()
    ];
  }
}

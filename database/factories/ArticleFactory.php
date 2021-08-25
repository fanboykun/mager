<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
Use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(3);
        return [
            // 'user_id' => 1,
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => 'https://ui-avatars.com/api/?name='.urlencode($title).'&color=7F9CF5&background=EBF4FF',
            'paragraph' => $this->faker->paragraphs(5, true),
            // 'paragraph' => $this->faker->realText($minNbChars = 160, $maxNbChars = 200, $indexSize = 2)
        ];
    }
}

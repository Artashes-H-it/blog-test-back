<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articleData = [
            [
                'title' => 'Cars',
                'content' => 'Expensive cars!'
            ],
            [
                'title' => 'Nature',
                'content' => 'Clean nature!'
            ],
            [
                'title' => 'Factory',
                'content' => 'Big factory'
            ],
            [
                'title' => 'Politician',
                'content' => 'Bad Politics!'
            ],
            [
                'title' => 'IT',
                'content' => 'IT technologies!'
            ]
        ];

        foreach ($articleData as $article) {
            Article::create([
                'title' => $article['title'],
                'content' => $article['content'],
            ]);
        }
    }
}

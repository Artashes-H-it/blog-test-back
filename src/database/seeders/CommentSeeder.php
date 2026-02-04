<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commentsData = [
            [
                'author_name' => 'John',
                'content' => 'Great article!',
                'article_id' => 1
            ],
            [
                'author_name' => 'Mary',
                'content' => 'Thanks for the information!',
                'article_id' => 2
            ],
            [
                'author_name' => 'Peter',
                'content' => 'Very useful.',
                'article_id' => 3
            ],
            [
                'author_name' => 'Anna',
                'content' => 'Looking forward to the next post!',
                'article_id' => 4
            ]
        ];

        foreach ($commentsData as $comment) {
            Comment::create([
                'author_name' => $comment['author_name'],
                'content' => $comment['content'],
                'article_id' => $comment['article_id']
            ]);
        }
    }
}

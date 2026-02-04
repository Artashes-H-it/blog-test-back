<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository implements ArticleRepositoryInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */

    public function all(): Collection
    {
        return Article::with('comments')->orderByDesc('created_at')->get();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id): mixed
    {
        return Article::with('comments')->findOrFail($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return Article::create($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteArticle(int $id): mixed
    {
        return Article::findOrFail($id)->delete();

    }

    /**
     * @param array $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return Article::updateOrCreate(
            ['id' => $data['id'] ?? null],
            [
                'title'   => $data['title'],
                'content' => $data['content'],
            ]
        );
    }
}

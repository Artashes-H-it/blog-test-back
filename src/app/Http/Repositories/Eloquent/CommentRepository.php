<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\CommentRepositoryInterface;
use App\Models\Comment;

class CommentRepository implements CommentRepositoryInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return Comment::create($data);
    }
}

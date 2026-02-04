<?php

namespace App\Http\Services;

use App\Http\Repositories\Interfaces\CommentRepositoryInterface;
use App\Http\Services\Interfaces\CommentServiceInterface;

class CommentService implements CommentServiceInterface
{
    public function __construct(
        protected CommentRepositoryInterface $commentRepository
    ) {}

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return $this->commentRepository->create($data);
    }

}

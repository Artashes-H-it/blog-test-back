<?php

namespace App\Http\Services;

use App\Http\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Http\Services\Interfaces\ArticleServiseInterface;

class ArticleService implements ArticleServiseInterface
{

    public function __construct(
        protected ArticleRepositoryInterface $articleRepository
    ) {}

    /**
     * @return mixed
     */
    public function list(): mixed
    {
        return $this->articleRepository->all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {

        return $this->articleRepository->create($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id): mixed
    {

        return $this->articleRepository->find($id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteArticle(int $id): mixed
    {
        return $this->articleRepository->deleteArticle($id);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->articleRepository->store($data);
    }

}

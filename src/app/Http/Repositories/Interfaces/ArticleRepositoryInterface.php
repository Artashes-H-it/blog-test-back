<?php

namespace App\Http\Repositories\Interfaces;

interface ArticleRepositoryInterface
{
    public function all();
    public function find(int $id);

    public function create(array $data);

    public function deleteArticle(int $id);

    public function store(array $data);
}

<?php

namespace App\Http\Services\Interfaces;

interface ArticleServiseInterface
{

    public function list(): mixed;

    public function create(array $data): mixed;
    public function find(int $id): mixed;

    public function deleteArticle(int $id): mixed;

    public function store(array $data): mixed;

}

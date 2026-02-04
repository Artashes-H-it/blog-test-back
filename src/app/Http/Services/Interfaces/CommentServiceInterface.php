<?php

namespace App\Http\Services\Interfaces;

interface CommentServiceInterface
{
    public function create(array $data): mixed;
}

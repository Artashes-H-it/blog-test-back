<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Services\Interfaces\CommentServiceInterface;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    public function __construct(
        private CommentServiceInterface $commentService
    ) {}

    public function store(CommentRequest $request): JsonResponse
    {
        try {

            $comment = $this->commentService->create($request->validated());

            return response()->json(['data' => $comment, 'success' => true]);

        }catch (\Exception $e){

            return response()->json(['data' => $e->getMessage(), 'success' => false]);
        }
    }
}

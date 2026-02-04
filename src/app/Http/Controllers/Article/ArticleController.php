<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Services\ArticleService;
use App\Http\Services\Interfaces\ArticleServiseInterface;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct(
        private ArticleServiseInterface $articleService
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $articles = $this->articleService->list();

        return response()->json(['data' => $articles, 'success' => true]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request): JsonResponse
    {
        try {
            $article = $this->articleService->store($request->validated());

            return response()->json(['message' => 'Article created', 'success' => true, 'data' => $article]);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage(), 'success' => false]);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $article = $this->articleService->find($id);

        return response()->json(['data' => $article, 'success' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request): JsonResponse
    {
        try {
            $article = $this->articleService->store($request->validated());

            return response()->json(['message' => 'Article updated', 'success' => true, 'data' => $article]);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage(), 'success' => false]);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {

            $article = $this->articleService->deleteArticle($id);
            return response()->json(['message' => 'Article deleted with comments', 'success' => true, 'data' => $article]);

        } catch (\Exception $e) {

            return response()->json(['message' => $e->getMessage(), 'success' => false]);

        }

    }
}

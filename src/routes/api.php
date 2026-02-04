<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Comment\CommentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('article', ArticleController::class);
Route::post('/comment', [CommentController::class, 'store']);

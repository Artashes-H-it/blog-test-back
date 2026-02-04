<?php

namespace App\Providers;

use App\Http\Repositories\Eloquent\ArticleRepository;
use App\Http\Repositories\Eloquent\CommentRepository;
use App\Http\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Http\Repositories\Interfaces\CommentRepositoryInterface;
use App\Http\Services\ArticleService;
use App\Http\Services\CommentService;
use App\Http\Services\Interfaces\ArticleServiseInterface;
use App\Http\Services\Interfaces\CommentServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
        $this->app->bind(ArticleServiseInterface::class, ArticleService::class);
        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);
        $this->app->bind(CommentServiceInterface::class, CommentService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

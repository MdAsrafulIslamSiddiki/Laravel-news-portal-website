<?php

namespace App\Providers;

use App\Models\News;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        View::composer('layouts.FrontendLayout', function ($view) {
            $breakingNews = News::where('category', 'Breaking_news')->latest()->take(5)->get();
            $view->with('breakingNews', $breakingNews);
        });
        View::composer('layouts.FrontendSidebar', function ($view) {
            $entertainmentNews = News::where('category', 'Entertainment')->latest()->take(5)->get();
            $agricultureNews = News::where('category', 'Agriculture')->latest()->take(5)->get();
            $view->with('entertainmentNews',  $entertainmentNews)->with('agricultureNews', $agricultureNews);
        });
    }
}

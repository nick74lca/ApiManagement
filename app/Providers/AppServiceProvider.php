<?php

namespace App\Providers;

use App\Services\DailySentenceService;
use App\Services\MetaphorpsumService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(DailySentenceService::class, MetaphorpsumService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

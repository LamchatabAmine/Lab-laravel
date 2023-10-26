<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CompetenceRepository;
use App\Repositories\EloquentCompetenceRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CompetenceRepository::class, EloquentCompetenceRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

// use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Model::preventLazyLoading();

        // Paginator::defaultView('pagination::bootstrap-4');
        // Paginator::use
    }
}

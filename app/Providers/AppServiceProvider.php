<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Add service bindings or custom logic here if needed
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // ✅ Set default string length to avoid MySQL 1071 error
        Schema::defaultStringLength(191);
    }
}

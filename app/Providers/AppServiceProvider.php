<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Vite;

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
        Vite::macro('style', fn (string $asset) => $this->content("resources/css/{$asset}"));
        Vite::macro('image', fn (string $asset) => $this->asset("resources/img/{$asset}"));
    }
}

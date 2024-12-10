<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
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
        // Force https on production
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        Blade::component('navigation-welcome.layout', 'layout-welcome');
        Blade::component('navigation-welcome.navbar', 'navbar-welcome');
        Blade::component('navigation-welcome.main', 'main-welcome');
        Blade::component('navigation-welcome.nav-link', 'nav-link-welcome');
        Blade::component('navigation-welcome.nav-link-mobile', 'nav-link-mobile-welcome');
        Blade::component('navigation-welcome.footer', 'footer-welcome');
    }
}

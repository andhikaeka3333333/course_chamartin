<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
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
        Blade::component('navigation-welcome.layout', 'layout-welcome');
        Blade::component('navigation-welcome.navbar', 'navbar-welcome');
        Blade::component('navigation-welcome.main', 'main-welcome');
        Blade::component('navigation-welcome.nav-link', 'nav-link-welcome');
        Blade::component('navigation-welcome.nav-link-mobile', 'nav-link-mobile-welcome');
    }
}

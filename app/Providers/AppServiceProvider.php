<?php

namespace App\Providers;

use App\Models\affiliate;
use App\Models\User;
use App\Models\UserAffiliate;
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
        User::unguard();
        Affiliate::unguard();
    }
}

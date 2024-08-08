<?php

namespace App\Providers;

use App\Models\Affiliate;
use App\Models\Commission;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        User::unguard();
        Affiliate::unguard();
        Commission::unguard();
    }
}

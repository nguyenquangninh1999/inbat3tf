<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Builder::defaultStringLength(191);

        try {
            $setting = \App\Models\Setting::get();
            View::share('setting', $setting);
        } catch (\Exception $e) {
            View::share('setting', new \App\Models\Setting());
        }
    }
}

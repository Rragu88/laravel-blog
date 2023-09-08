<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use App\Models\User;


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
        Model::unguard();

        Gate::define('admin', function (User $user) {
            return $user->username === 'rragusa';
        });
    }
}

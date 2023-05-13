<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //

        Gate::define('isAdmin', function ($user){
            return $user->role == 'admin';
        });

        Gate::define('isManager', function ($user){
            return $user->role == 'manager';
        });

        Gate::define('isEmployee', function ($user){
            return $user->role == 'employee';
        });

        Gate::define('isHRD', function ($user){
            return $user->role == 'hrd';
        });

    }
}

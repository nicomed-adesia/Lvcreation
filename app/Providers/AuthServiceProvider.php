<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use app\Models\User;
use app\Models\membre;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        $this->registerPolicies();
        Gate::define('access-admin',function(User $user){
            return $user->Role == 'Admin' || $user->Role == 'SuperAdmin';
        });

        $this->registerPolicies();
        Gate::define('access-membre',function(membre $user){
            return $user->Role == 'membre';
        });
    }
}

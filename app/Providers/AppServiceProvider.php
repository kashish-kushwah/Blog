<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Your model policies
    ];

    public function boot()
    {
        $this->registerPolicies();  // Ensure this line is correct

        // Other gates or policies
        Gate::define('isAdmin', function ($user) {
            return $user->is_admin;  // or $user->isAdmin() depending on your implementation
        });
    }
}

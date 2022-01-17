<?php

namespace App\Providers;

use App\Models\RuangBantu;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('my_content', function (User $user, RuangBantu $ruangBantu) {
            return Auth::check() && $user->id === $ruangBantu->user_id;
        });

        Gate::define('is_admin', function (User $user) {
            return Auth::check() && $user->is_admin;
        });

        Gate::define('auth', function () {
            return Auth::check();
        });

    }
}

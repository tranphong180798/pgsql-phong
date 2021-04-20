<?php

namespace App\Providers;

use App\Models\Permission;
use App\Policies\PermissionPolicy;
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
        // 'App\Models' => 'App\Policies\ModelPolicy',
      //  Permission::class => PermissionPolicy::class

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('show',function ($user){
            return $user->hasAccess('view');
        });
        Gate::define('update',function ($user){
            return $user->hasAccess('update');
        });
        Gate::define('delete',function ($user){
            return $user->hasAccess('delete');
        });

        Gate::define('isAdmin',function ($user){
            return $user->hasAdmin();
        });





    }
}

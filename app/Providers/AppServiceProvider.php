<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
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
        
        Gate::policy(Post::class, PostPolicy::class);
        Schema::defaultStringLength(191); 

        Gate::define('modify', function (User $user) {
        // Only show edit/delete icons if the logged-in user is actually an admin
        return $user->is_admin === true; 
    });
        
    }
}

<?php

namespace Theuniquepoint\Authenticator;

use Illuminate\Support\ServiceProvider;

class AuthenticatorServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     * 
     * @return void
     */
    public function boot() {
        include __DIR__.'/routes/AuthenticatorRoutes.php';
    }
    
    /**
     * Register the application services.
     * 
     * @return void
     */
    public function register() {
        $this->app->make('Theuniquepoint\Authenticator\Http\Controllers\AuthenticatorController');
        $this->loadViewsFrom(__DIR__.'/resources/views/authenticator', 'authenticator');
    }
}

?>
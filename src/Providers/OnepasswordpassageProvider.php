<?php

namespace Williamsonwuesi\Onepasswordpassage\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Williamsonwuesi\Onepasswordpassage\Http\Middleware\PassageMiddleware;

class OnepasswordpassageProvider extends ServiceProvider {



    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot(Router $router){
        
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'Onepasswordpassage');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        $router->middlewareGroup('passage_redirect_route', [PassageMiddleware::class]);

    }

} 
<?php

namespace Williamsonwuesi\Onepasswordpassage\Providers;

use Illuminate\Support\ServiceProvider;

class OnepasswordpassageProvider extends ServiceProvider {

    public function boot(){
        
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'Onepasswordpassage');

    }

} 
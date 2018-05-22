<?php

namespace Plugins\Content;

use App\Core\Contracts\Plugin;
use App\Core\Contracts\PluginRoute;
use Illuminate\Support\ServiceProvider;

class HaosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(PluginRoute $route, Plugin $plugin)
    {   
        $plugin->register('haos_content');
        
        $route->loadRoutes(__DIR__.'/routes.php');
        $route->loadAuthRoutes(__DIR__.'/routes-admin.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'haos_content');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

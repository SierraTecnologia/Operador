<?php

namespace Operador;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

class OperadorProvider extends ServiceProvider
{
    /**
     * Rotas do Menu
     */
    public static $menuItens = [
        'Operações' => [
            [
                'text'        => 'Bots',
                'icon'        => 'fas fa-fw fa-industry',
                'icon_color'  => 'red',
                'label_color' => 'success',
                'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                // 'nivel' => \App\Models\Role::$GOOD,
            ],
            'Bots' => [
                [
                    'text'        => 'Runners',
                    'url'         => 'runners',
                    'icon'        => 'fas fa-fw fa-industry',
                    'icon_color'  => 'red',
                    'label_color' => 'success',
                    'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                    // 'nivel' => \App\Models\Role::$GOOD,
                ],
                [
                    'text'        => 'Actions',
                    'route'       => 'rica.finder.action.actions.index',
                    'icon'        => 'fas fa-fw fa-coffee',
                    'icon_color'  => 'red',
                    'label_color' => 'success',
                    'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                    // 'nivel' => \App\Models\Role::$GOOD,
                ],
            ],
        ],
    ];
    
    /**
     * Alias the services in the boot.
     */
    public function boot()
    {
        
    }

    /**
     * Register the services.
     */
    public function register()
    {
        
        // Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/operador');

        // // View namespace
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'operador');
        // $this->publishes(
        //     [
        //     $viewsPath => base_path('resources/views/vendor/operador'),
        //     ], 'views'
        // );


    }

}

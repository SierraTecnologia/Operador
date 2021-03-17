<?php

namespace Operador;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Router;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class OperadorProvider extends ServiceProvider
{
    /**
     * Rotas do Menu
     */
    public static $menuItens = [
        [
            'text' => 'Operações',
            'icon' => 'fas fa-fw fa-search',
            'icon_color' => "blue",
            'label_color' => "success",
            'section' => "master",
            'feature' => 'operador',
            'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
        ],
        'Operações' => [
            [
                'text'        => 'Bots',
                'icon'        => 'fas fa-fw fa-industry',
                'icon_color'  => 'red',
                'label_color' => 'success',
                'section' => "master",
                'feature' => 'operador',
                'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                // 'nivel' => \Porteiro\Models\Role::$GOOD,
            ],
            'Bots' => [
                [
                    'text'        => 'Runners',
                    'route'         => 'runners',
                    'icon'        => 'fas fa-fw fa-industry',
                    'icon_color'  => 'red',
                    'label_color' => 'success',
                    'section' => "master",
                    'feature' => 'operador',
                    'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                    // 'nivel' => \Porteiro\Models\Role::$GOOD,
                ],
                [
                    'text'        => 'Actions',
                    'route'       => 'rica.finder.action.actions.index',
                    'icon'        => 'fas fa-fw fa-coffee',
                    'icon_color'  => 'red',
                    'label_color' => 'success',
                    'section' => "master",
                    'feature' => 'operador',
                    'level'       => 3, // 0 (Public), 1, 2 (Admin) , 3 (Root)
                    // 'nivel' => \Porteiro\Models\Role::$GOOD,
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
        $this->loadMigrationsFrom(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'database'.DIRECTORY_SEPARATOR.'operador');

        // // View namespace
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'operador');
        // $this->publishes(
        //     [
        //     $viewsPath => base_path('resources'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'operador'),
        //     ], 'views'
        // );
    }
}

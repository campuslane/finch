<?php

namespace Campuslane\Finch\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class FinchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap Finch services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setPathConstants();
        $this->includeRoutes();
        $this->setViewLoading();
        $this->setPublishers();  
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // if we want to set any finch aliases
        //$this->setAliases();
    }

    /**
     * Set Path Constants
     */
    private function setPathConstants()
    {
        define('FINCH_BASE', __DIR__ . '/../');
    }

    /**
     * Include the Routes File
     * @return void
     */
    private function includeRoutes()
    {
        include __DIR__.'/../routes.php';
    }

    /**
     * Set the View Loading Path & Name
     */
    private function setViewLoading()
    {
        $this->loadViewsFrom(__DIR__.'/../Views', 'finch');
    }

    /**
     * Set the Package Publishing
     */
    private function setPublishers()
    {

        // views
        $this->publishes([
            __DIR__.'/../Views' => base_path('resources/views/campuslane/finch'),
        ]);

        // assets
        $this->publishes([
            __DIR__.'/../Assets' => public_path('campuslane/finch'),
        ], 'public');
    }

    /**
     * Set Finch Aliases
     */
    private function setAliases()
    {
        $this->app->booting(function(){
            $loader = AliasLoader::getInstance();
            // We can set finch aliases here
            //$loader->alias('AliasName', 'CampusLane\Finch\AliasName');
        });
    }
}
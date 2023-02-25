<?php

namespace Luisfayre\LaravelTablerUi;

use Laravel\Ui\UiCommand;
use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            Tabler::expandCommandMacro();

            $this->commands([
                AuthCommand::class,
            ]);

            // $this->publishes([
            //     __DIR__.'/stubs/zh_CN.json' => resource_path('lang/zh_CN.json')
            // ], 'laravel-tabler-lang-cn');

            $this->publishes([
                __DIR__.'/stubs/libs' => public_path('libs')
            ], 'tabler-libs');
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}

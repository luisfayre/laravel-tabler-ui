<?php

namespace Luisfayre\LaravelTablerUi;

use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;
use Laravel\Ui\Presets\Bootstrap;
use Laravel\Ui\Presets\Preset as BasePreset;

class TablerPreset extends BasePreset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::tabler();
        static::updateSass();
        static::updateBootstrapping();
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            '@tabler/core' => '^1.0.0-beta16',
        ] + $packages;
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__.'/stubs/scss/app.scss', resource_path('sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/stubs/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }
    /**
     * Update the tabler files.
     *
     * @return void
     */
    protected static function tabler()
    {
        copy(__DIR__.'/stubs/css/demo.min.css', public_path('css/demo.min.css'));
        copy(__DIR__.'/stubs/css/tabler-flags.min.css', public_path('css/tabler-flags.min.css'));
        copy(__DIR__.'/stubs/css/tabler-payments.min.css', public_path('css/tabler-payments.min.css'));
        copy(__DIR__.'/stubs/css/tabler-vendors.min.css', public_path('css/tabler-vendors.min.css'));
        // copy(__DIR__.'\stubs\libs\apexcharts\dist\apexcharts.js', public_path('libs\apexcharts\dist\apexcharts.js'));
        // copy(__DIR__.'/stubs/libs/jsvectormap/dist/js/jsvectormap.min.js', public_path('libs/jsvectormap/dist/js/jsvectormap.min.js'));
        // copy(__DIR__.'/stubs/libs/jsvectormap/dist/maps/world.js', public_path('libs/jsvectormap/dist/maps/world.js'));
        // copy(__DIR__.'/stubs/libs/jsvectormap/dist/maps/world-merc.js', public_path('libs/jsvectormap/dist/maps/world-merc.js'));
    }
}

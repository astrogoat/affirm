<?php

namespace Astrogoat\Affirm;

use Astrogoat\Affirm\Settings\AffirmSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AffirmServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('affirm')
            ->settings(AffirmSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->backendRoutes(__DIR__.'/../routes/backend.php')
            ->frontendRoutes(__DIR__.'/../routes/frontend.php');
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('affirm')->hasViews();
    }
}

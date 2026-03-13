<?php 

namespace ChampionCoolingSystems\Dealer;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Webkul\PluginManager\Package;
use Filament\Navigation\NavigationGroup;

class DealerPlugin implements Plugin
{

    public function getId(): string
    {
        return 'dealers';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function register(Panel $panel): void
    {
        if (! Package::isPluginInstalled($this->getId())) {
            return;
        }


        $panel
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Dealers')
                    ->icon('icon-employees'),
            ])
            ->when($panel->getId() == 'admin', function (Panel $panel) {
                $panel
                    ->discoverResources(
                        in: __DIR__.'/Filament/Resources',
                        for: 'ChampionCoolingSystems\\Dealer\\Filament\\Resources'
                    )
                    ->discoverPages(
                        in: __DIR__.'/Filament/Pages',
                        for: 'ChampionCoolingSystems\\Dealer\\Filament\\Pages'
                    )
                    ->discoverClusters(
                        in: __DIR__.'/Filament/Clusters',
                        for: 'ChampionCoolingSystems\\Dealer\\Filament\\Clusters'
                    )
                    ->discoverClusters(
                        in: __DIR__.'/Filament/Widgets',
                        for: 'ChampionCoolingSystems\\Dealer\\Filament\\Widgets'
                    );
            });
    }

    public function boot(Panel $panel): void
    {
        //
    }
}

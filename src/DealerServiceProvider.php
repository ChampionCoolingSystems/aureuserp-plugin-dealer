<?php

namespace ChampionCoolingSystems\Dealer;

use Filament\Panel;
use Webkul\PluginManager\Console\Commands\InstallCommand;
use Webkul\PluginManager\Console\Commands\UninstallCommand;
use Webkul\PluginManager\Package;
use Webkul\PluginManager\PackageServiceProvider;

class DealerServiceProvider extends PackageServiceProvider
{
	public static string $name = 'dealers';

	public function configureCustomPackage(Package $package): void
	{
		$package->name(static::$name)
			->hasTranslations()
			->hasMigrations([
			])
			->runsMigrations()
			->hasInstallCommand(function (InstallCommand $command) {
				$command
					->runsMigrations()
					->runsSeeders();
			})
			->hasUninstallCommand(function (UninstallCommand $command) {})
			->icon('dealers');
	}

	public function packageBooted(): void
	{
		//
	}

	public function packageRegistered(): void
	{
		Panel::configureUsing(function (Panel $panel): void {
			$panel->plugin(DealerPlugin::make());
		});
	}
}
<?php

namespace PhpGuus\I12;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use PhpGuus\I12\Console\Commands\RefreshExchangeRates;
use PhpGuus\I12\Console\Commands\SeedDatabaseTables;
use PhpGuus\I12\Factories\I12Factory;

class ServiceProvider extends BaseServiceProvider
{
	//region Public Access

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if($this->app->runningInConsole()) {
			$this->commands([
				RefreshExchangeRates::class,
				SeedDatabaseTables::class
			]);
			$this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

			$this->publishes([
				__DIR__ . '/../resources/assets/flags' =>
					public_path('vendor/' . config('i12.asset_directory') .
						'/images/flags')
			], 'assets');
			$this->publishes([
				__DIR__ . '/../config/i12.php' => base_path('config/i12.php')
			], 'config');
			$this->publishes([
				__DIR__ . '/../database/migrations' => database_path('migrations')
			], 'migrations');
		}
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('i12', function () {
			return new I12Factory;
		});

		$this->mergeConfigFrom(__DIR__ . '/../config/i12.php', 'i12');
	}

	//endregion
}
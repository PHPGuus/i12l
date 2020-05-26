<?php

namespace PhpGuus\I12l;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use PhpGuus\I12l\Console\Commands\RefreshExchangeRates;
use PhpGuus\I12l\Console\Commands\SeedDatabaseTables;
use PhpGuus\I12l\Factories\I12lFactory;

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
					public_path('vendor/' . config('i12l.asset_directory') .
						'/images/flags')
			], 'assets');
			$this->publishes([
				__DIR__ . '/../config/i12l.php' => base_path('config/i12l.php')
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
		$this->app->bind('i12l', function () {
			return new I12lFactory;
		});

		$this->mergeConfigFrom(__DIR__ . '/../config/i12l.php', 'i12l');
	}

	//endregion
}

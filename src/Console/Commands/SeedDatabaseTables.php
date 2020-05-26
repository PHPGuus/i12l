<?php

namespace PhpGuus\I12\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use PhpGuus\I12\Seeds\CallingCodesTableSeeder;
use PhpGuus\I12\Seeds\CountriesTableSeeder;
use PhpGuus\I12\Seeds\CurrenciesTableSeeder;

class SeedDatabaseTables extends Command
{
	//region Public Access

	/**
	 * Run the command.
	 */
	public function handle()
	{
		Artisan::call('db:seed', [
			'--class' => CountriesTableSeeder::class
		]);
		Artisan::call('db:seed', [
			'--class' => CurrenciesTableSeeder::class
		]);
		Artisan::call('db:seed', [
			'--class' => CallingCodesTableSeeder::class
		]);
	}

	//endregion

	//region Protected Attributes

	/**
	 * @inheritDoc
	 */
	protected $description = 'Seed the country and currency tables.';

	/**
	 * @inheritDoc
	 */
	protected $signature = 'i12:seed-tables';

	//endregion
}
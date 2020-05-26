<?php

namespace PhpGuus\I12\Tests;

use Orchestra\Testbench\TestCase;
use PhpGuus\I12\Facades\I12;
use PhpGuus\I12\Models\Currency;
use PhpGuus\I12\Models\ExchangeRate;
use PhpGuus\I12\ServiceProvider;

class I12CurrencyExchangeTest extends TestCase
{
	//region Public Tests

	/** @test */
	public function itCanExchangeFromUsdToEur()
	{
		$this->seedCurrencies();
		$this->seedExchangeRates();

		$dollar = I12::getCurrencyByAlpha3Code('USD');
		$this->assertNotNull($dollar);
		$euro = I12::getCurrencyByAlpha3Code('EUR');
		$this->assertNotNull($euro);

		$exchangeRate = I12::getExchangeRate($dollar, $euro);
		$this->assertNotNull($exchangeRate);
		$this->assertEquals(0, $exchangeRate->system_generated);
	}

	/** @test */
	public function itCanExchangeFromEurToUsd()
	{
		$this->seedCurrencies();
		$this->seedExchangeRates();

		$dollar = I12::getCurrencyByAlpha3Code('USD');
		$this->assertNotNull($dollar);
		$euro = I12::getCurrencyByAlpha3Code('EUR');
		$this->assertNotNull($euro);

		$exchangeRate = I12::getExchangeRate($euro, $dollar);
		$this->assertNotNull($exchangeRate);
		$this->assertEquals(1, $exchangeRate->system_generated);
	}

	/** @test */
	public function itCanExchangeFromUsdToGbp()
	{
		$this->seedCurrencies();
		$this->seedExchangeRates();

		$dollar = I12::getCurrencyByAlpha3Code('USD');
		$this->assertNotNull($dollar);
		$poundSterling = I12::getCurrencyByAlpha3Code('GBP');
		$this->assertNotNull($poundSterling);

		$exchangeRate = I12::getExchangeRate($dollar, $poundSterling);
		$this->assertNotNull($exchangeRate);
		$this->assertEquals(0, $exchangeRate->system_generated);
	}

	/** @test */
	public function itCanExchangeFromEurToGbp()
	{
		$this->seedCurrencies();
		$this->seedExchangeRates();

		$euro = I12::getCurrencyByAlpha3Code('EUR');
		$this->assertNotNull($euro);
		$poundSterling = I12::getCurrencyByAlpha3Code('GBP');
		$this->assertNotNull($poundSterling);

		$exchangeRate = I12::getExchangeRate($euro, $poundSterling);
		$this->assertNotNull($exchangeRate);
		$this->assertEquals(1, $exchangeRate->system_generated);
	}

	//endregion

	//region Protected Attributes

	//endregion

	//region Protected Implementation

	/**
	 * @inheritDoc
	 */
	protected function getEnvironmentSetUp($app)
	{
		include_once __DIR__ . '/../database/migrations/' .
			'2020_03_31_213951_create_currencies_table.php';
		(new \CreateCurrenciesTable)->up();
		include_once __DIR__ . '/../database/migrations/' .
			'2020_04_02_182311_create_exchange_rates_table.php';
		(new \CreateExchangeRatesTable)->up();
	}

	/**
	 * @inheritDoc
	 */
	protected function getPackageAliases($app)
	{
		return [
			'I12' => I12::class
		];
	}

	/**
	 * @inheritDoc
	 */
	protected function getPackageProviders($app)
	{
		return [
			ServiceProvider::class
		];
	}

	protected function seedCurrencies()
	{
		Currency::firstOrCreate([
			'alpha3' => 'EUR',
			'minor_units' => 2,
			'name' => 'Euro',
			'numeric' => '978',
			'unicode' => '20ac'
		]);
		Currency::firstOrCreate([
			'alpha3' => 'GBP',
			'minor_units' => 2,
			'name' => 'Pound Sterling',
			'numeric' => '826',
			'unicode' => 'a3'
		]);
		Currency::firstOrCreate([
			'alpha3' => 'USD',
			'minor_units' => 2,
			'name' => 'US Dollar',
			'numeric' => '840',
			'unicode' => '24'
		]);
	}

	protected function seedExchangeRates()
	{
		$usd = I12::getCurrencyByAlpha3Code('USD');
		$eur = I12::getCurrencyByAlpha3Code('EUR');
		$gbp = I12::getCurrencyByAlpha3Code('GBP');

		ExchangeRate::firstOrCreate([
			'base_currency_id' => $usd->id,
			'target_currency_id' => $eur->id,
			'exchange_rate' => 0.924296,
			'system_generated' => FALSE,
		]);
		ExchangeRate::firstOrCreate([
			'base_currency_id' => $usd->id,
			'target_currency_id' => $gbp->id,
			'exchange_rate' => 0.811574,
			'system_generated' => FALSE,
		]);
	}

	//endregion
}
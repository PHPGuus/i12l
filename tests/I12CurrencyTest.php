<?php

namespace PhpGuus\I12\Tests;

use Orchestra\Testbench\TestCase;
use PhpGuus\I12\Facades\I12;
use PhpGuus\I12\Models\Currency;
use PhpGuus\I12\ServiceProvider;

class I12CurrencyTest extends TestCase
{
	//region Public Tests

	/** @test */
	public function itCanWriteToTheDatabase()
	{
		$currency = Currency::create([
			'alpha3' => 'aaa',
			'minor_units' => 2,
			'name' => 'My first currency',
			'numeric' => '001',
			'unicode' => '204a'
		]);

		$currencyFromDb = Currency::find($currency->id);

		$this->assertSame($currencyFromDb->name, 'My first currency');
	}

	/** @test */
	public function itReturnsAKnownCurrencyByAlpha3Code()
	{
		Currency::create([
			'alpha3' => 'aaa',
			'minor_units' => 2,
			'name' => 'My first currency',
			'numeric' => '001',
			'unicode' => '204a'
		]);

		$currency = I12::getCurrencyByAlpha3Code('aaa');
		$this->assertNotNull($currency);
	}

	/** @test */
	public function itReturnsNullForAnUnknownCurrencyByAlpha3Code()
	{
		Currency::create([
			'alpha3' => 'aaa',
			'minor_units' => 2,
			'name' => 'My first currency',
			'numeric' => '001',
			'unicode' => '204a'
		]);

		$currency = I12::getCurrencyByAlpha3Code('bbb');
		$this->assertNull($currency);
	}

	/** @test */
	public function itReturnsAKnownCurrencyByName()
	{
		Currency::create([
			'alpha3' => 'aaa',
			'minor_units' => 2,
			'name' => 'My first currency',
			'numeric' => '001',
			'unicode' => '204a'
		]);

		$currency = I12::getCurrencyByName('first');
		$this->assertNotNull($currency);
	}

	/** @test */
	public function itReturnsNullForAnUnknownCurrencyByName()
	{
		Currency::create([
			'alpha3' => 'aaa',
			'minor_units' => 2,
			'name' => 'My first currency',
			'numeric' => '001',
			'unicode' => '204a'
		]);

		$currency = I12::getCurrencyByName('seventh');
		$this->assertNull($currency);
	}

	/** @test */
	public function itReturnsAKnownCurrencyByNumericCode()
	{
		Currency::create([
			'alpha3' => 'aaa',
			'minor_units' => 2,
			'name' => 'My first currency',
			'numeric' => '001',
			'unicode' => '204a'
		]);

		$currency = I12::getCurrencyByNumericCode('001');
		$this->assertNotNull($currency);
	}

	/** @test */
	public function itReturnsNullForAnUnknownCurrencyByNumericCode()
	{
		Currency::create([
			'alpha3' => 'aaa',
			'minor_units' => 2,
			'name' => 'My first currency',
			'numeric' => '001',
			'unicode' => '204a'
		]);

		$currency = I12::getCurrencyByNumericCode('007');
		$this->assertNull($currency);
	}

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

	//endregion
}
<?php

namespace PhpGuus\I12\Tests;

use Orchestra\Testbench\TestCase;
use PhpGuus\I12\Facades\I12;
use PhpGuus\I12\Models\Country;
use PhpGuus\I12\ServiceProvider;

class I12CountryTest extends TestCase
{
	//region Public Tests

	/** @test */
	public function itCanWriteToTheDatabase()
	{
		$country = Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$countryFromDb = Country::find($country->id);

		$this->assertSame($countryFromDb->short_name, 'My first country');
	}

	/** @test */
	public function itReturnsAKnownCountryByAlpha2Code()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByAlpha2Code('aa');
		$this->assertNotNull($country);
	}

	/** @test */
	public function itReturnsNullForAnUnknownCountryByAlpha2Code()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByAlpha2Code('bb');
		$this->assertNull($country);
	}

	/** @test */
	public function itReturnsAKnownCountryByAlpha3Code()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByAlpha3Code('aaa');
		$this->assertNotNull($country);
	}

	/** @test */
	public function itReturnsNullForAnUnknownCountryByAlpha3Code()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByAlpha3Code('bbb');
		$this->assertNull($country);
	}

	/** @test */
	public function itReturnsAKnownCountryByName()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByName('country');
		$this->assertNotNull($country);
	}

	/** @test */
	public function itReturnsNullForAnUnknownCountryByName()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByName('seventh');
		$this->assertNull($country);
	}

	/** @test */
	public function itReturnsAKnownCountryByNumericCode()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByNumericCode('001');
		$this->assertNotNull($country);
	}

	/** @test */
	public function itReturnsNullForAnUnknownCountryByNumericCode()
	{
		Country::create([
			'alpha2' => 'aa',
			'alpha3' => 'aaa',
			'numeric' => '001',
			'short_name' => 'My first country'
		]);

		$country = I12::getCountryByNumericCode('007');
		$this->assertNull($country);
	}

	//endregion

	//region Protected Implementation

	/**
	 * @inheritDoc
	 */
	protected function getEnvironmentSetUp($app)
	{
		include_once __DIR__ . '/../database/migrations/' .
			'2020_03_31_162315_create_countries_table.php';
		(new \CreateCountriesTable)->up();
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

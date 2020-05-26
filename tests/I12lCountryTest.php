<?php

namespace PhpGuus\I12l\Tests;

use Orchestra\Testbench\TestCase;
use PhpGuus\I12l\Facades\I12l;
use PhpGuus\I12l\Models\Country;
use PhpGuus\I12l\ServiceProvider;

class I12lCountryTest extends TestCase
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

		$country = I12l::getCountryByAlpha2Code('aa');
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

		$country = I12l::getCountryByAlpha2Code('bb');
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

		$country = I12l::getCountryByAlpha3Code('aaa');
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

		$country = I12l::getCountryByAlpha3Code('bbb');
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

		$country = I12l::getCountryByName('country');
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

		$country = I12l::getCountryByName('seventh');
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

		$country = I12l::getCountryByNumericCode('001');
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

		$country = I12l::getCountryByNumericCode('007');
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
			'I12l' => I12l::class
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

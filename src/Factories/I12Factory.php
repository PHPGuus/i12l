<?php

namespace PhpGuus\I12\Factories;

use PhpGuus\I12\Models\Country;
use PhpGuus\I12\Models\Currency;
use PhpGuus\I12\Models\ExchangeRate;

class I12Factory
{
	//region Public Status Report

	/**
	 * Get the country known by $alpha2.
	 *
	 * @param string $alpha2
	 * @return Country|null
	 */
	public function getCountryByAlpha2Code(string $alpha2): ?Country
	{
		return Country::where('alpha2', $alpha2)->first();
	}

	/**
	 * Get the country known by $alpha3.
	 *
	 * @param string $alpha3
	 * @return Country|null
	 */
	public function getCountryByAlpha3Code(string $alpha3): ?Country
	{
		return Country::where('alpha3', $alpha3)->first();
	}

	/**
	 * Get the country known by $name.
	 *
	 * @param string $name
	 * @return Country|null
	 */
	public function getCountryByName(string $name): ?Country
	{
		return Country::where('short_name', 'like', '%' . $name . '%')->first();
	}

	/**
	 * Get the country known by $numericCode.
	 *
	 * @param string $numericCode
	 * @return Country|null
	 */
	public function getCountryByNumericCode(string $numericCode): ?Country
	{
		return Country::where('numeric', $numericCode)->first();
	}

	/**
	 * Get the currency known by $alpha3.
	 *
	 * @param string $alpha3
	 * @return Currency|null
	 */
	public function getCurrencyByAlpha3Code(string $alpha3): ?Currency
	{
		return Currency::where('alpha3', $alpha3)->first();
	}

	/**
	 * Get the currency known by $name.
	 *
	 * @param string $name
	 * @return Currency|null
	 */
	public function getCurrencyByName(string $name): ?Currency
	{
		return Currency::where('name', 'like', '%' . $name . '%')->first();
	}

	/**
	 * Get the currency known by $numericCode.
	 *
	 * @param string $numericCode
	 * @return Currency|null
	 */
	public function getCurrencyByNumericCode(string $numericCode): ?Currency
	{
		return Currency::where('numeric', $numericCode)->first();
	}

	/**
	 * Get the exchange rate from $sourceCurrency to $targetCurrency.
	 *
	 * @param Currency $base
	 * @param Currency $target
	 * @return ExchangeRate|null
	 */
	public function getExchangeRate(Currency $base, Currency $target,
		bool $recursive = FALSE): ?ExchangeRate
	{
		/*
		 * See if we have it in the database...
		 */
		$storedExchangeRate = ExchangeRate::query()
			->where('base_currency_id', $base->id)
			->where('target_currency_id', $target->id)
			->first();
		if($storedExchangeRate) {
			if($storedExchangeRate->system_generated && !$recursive) {
				$reverse = $this->getExchangeRate($target, $base, TRUE);
				$storedExchangeRate->fill([
					'exchange_rate' => 1 / $reverse->exchange_rate
				])->save();
			}

			return $storedExchangeRate;
		}

		/*
		 * Well, maybe we have the reverse?
		 */
		$storedExchangeRate = ExchangeRate::query()
			->where('base_currency_id', $target->id)
			->where('target_currency_id', $base->id)
			->first();
		if($storedExchangeRate) {
			$newExchangeRate = ExchangeRate::create([
				'base_currency_id' => $base->id,
				'target_currency_id' => $target->id,
				'system_generated' => 1
			]);
			$newExchangeRate->fill([
				'exchange_rate' =>
					number_format(1 / $storedExchangeRate->exchange_rate, 6)
			])->save();
			return $newExchangeRate;
		}

		if($recursive)
			return NULL;

		/*
		 * Maybe we can go from base -> USD and from USD -> target?
		 *
		 * 1 EUR -> 1.08392 USD && 1 USD -> 76.3418
		 * 1 EUR -> 82.748404 (approx)
		 */
		$usdCurrency = $this->getCurrencyByAlpha3Code('USD');
		$baseToUsd = $this->getExchangeRate($base, $usdCurrency, TRUE);
		$usdToTarget = $this->getExchangeRate($usdCurrency, $target, TRUE);
		if($baseToUsd && $usdToTarget) {
			$newExchangeRate = ExchangeRate::create([
				'base_currency_id' => $base->id,
				'target_currency_id' => $target->id,
				'system_generated' => 1
			]);
			$newExchangeRate->fill([
				'exchange_rate' =>
					$baseToUsd->exchange_rate * $usdToTarget->exchange_rate
			])->save();
			return $newExchangeRate;
		}

		/*
		 * We don't have enough information to calculate this exchange rate...
		 */
		return NULL;
	}

	//endregion
}
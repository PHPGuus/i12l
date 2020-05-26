<?php

namespace PhpGuus\I12\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use PhpGuus\I12\Facades\I12;
use PhpGuus\I12\Models\ExchangeRate;

class RefreshExchangeRates implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	//region Public Construction

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	//endregion

	//region Public Access

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		$url = $this->getProviderUrl();

		$queryString = $this->getProviderQueryString();
		if($queryString[0] != '?') {
			$url .= '?';
		}
		$url .= $queryString;

		$client = new Client();
		$response = $client->get($url);
		if($response->getStatusCode() == 200) {
			$responseData = json_decode($response->getBody()->getContents());
			$this->storeInDatabase($responseData);
		}
	}

	//endregion

	//region Protected Implementation

	/**
	 * The query string used with the provider Url in order to authenticate
	 * access to download the exchange rates.
	 *
	 * @return string
	 */
	protected function getProviderQueryString(): string
	{
		return 'app_id=' .
			config('services.' . config('i12.exchange_rate_provider'))['app_id'];
	}

	/**
	 * The URL used to download the latest exchange rates.
	 *
	 * @return string
	 */
	protected function getProviderUrl(): string
	{
		return 'https://openexchangerates.org/api/latest.json';
	}

	protected function storeInDatabase($json)
	{
		$baseCurrency = I12::getCurrencyByAlpha3Code($json->base);
		if(!$baseCurrency) {
			return;
		}

		foreach($json->rates as $currencyAlpha3 => $rate) {
			Log::debug('Target currency: "' . $currencyAlpha3 . '"');
			Log::debug('Exchange rate (from 1 USD): ' . $rate);
			$targetCurrency = I12::getCurrencyByAlpha3Code($currencyAlpha3);
			if($targetCurrency) {
				$exchangeRate = ExchangeRate::firstOrCreate([
					'base_currency_id' => $baseCurrency->id,
					'target_currency_id' => $targetCurrency->id,
				]);
				if($exchangeRate) {
					$exchangeRate->fill([
						'exchange_rate' => number_format($rate, 6)
					])->save();
				}
			}
		}
	}
}

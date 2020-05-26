<?php

namespace PhpGuus\I12\Console\Commands;

use Illuminate\Console\Command;
use PhpGuus\I12\Jobs\RefreshExchangeRates as RefreshExchangeRatesJob;

class RefreshExchangeRates extends Command
{
	//region Public Access

	/**
	 * Run the command.
	 */
	public function handle()
	{
		RefreshExchangeRatesJob::dispatchNow();
	}

	//endregion

	//region Protected Attributes

	/**
	 * @inheritDoc
	 */
	protected $description = 'Refresh Exchange Rates from the configured ' .
		'provider.';

	/**
	 * @inheritDoc
	 */
	protected $signature = 'i12:refresh-exchange-rates';

	//endregion
}
<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Asset Directory
	|--------------------------------------------------------------------------
	|
	| The directory into which assets are to be copied.
	|
	| This is normally the provider name of the package (phpguus), but can be
	| configured to suit your taste.
	|
	| The configured directory will become a subdirectory of
	| `public_path('vendor')`.
	|
	*/

	'asset_directory' => 'phpguus',

	/*
	|--------------------------------------------------------------------------
	| Currency Exchange Rate Provider Settings
	|--------------------------------------------------------------------------
	|
	| The settings below select and provide connection details for the
	| preferred supplier of exchange rate information.
	|
	| The value of this key is used to find the credentials configuration in
	| the `services` config file. That configuration must include the sub-key
	| "client_id".
	|
	| Currently, only OpenExchangeRates have been tested in their free service.
	|
	*/

	'exchange_rate_provider' => 'openexchangerates',

	/*
	|--------------------------------------------------------------------------
	| Table prefix
	|--------------------------------------------------------------------------
	|
	| Prefix for the tables of this package. Normally empty, but can be set to
	| distinguish between tables of this package and other tables.
	|
	| This package creates the following tables:
	| - countries
	| - currencies
	| - exchange_rates
	|
	*/

	'table_prefix' => '',

];

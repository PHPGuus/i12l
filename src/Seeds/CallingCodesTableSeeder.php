<?php

namespace PhpGuus\I12\Seeds;

use Illuminate\Database\Seeder;
use PhpGuus\I12\Facades\I12;
use PhpGuus\I12\Models\CallingCode;

class CallingCodesTableSeeder extends Seeder
{
	/**
	 * Seed the database.
	 *
	 * @return void
	 */
	public function run()
	{
		$country = I12::getCountryByAlpha3Code('GBR');
		CallingCode::firstOrCreate([
			'country_id' => $country->id,
			'calling_code' => '44',
		]);
		$country = I12::getCountryByAlpha3Code('IRL');
		CallingCode::firstOrCreate([
			'country_id' => $country->id,
			'calling_code' => '353'
		]);
	}
}
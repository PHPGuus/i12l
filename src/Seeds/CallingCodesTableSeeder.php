<?php

namespace PhpGuus\I12l\Seeds;

use Illuminate\Database\Seeder;
use PhpGuus\I12l\Facades\I12l;
use PhpGuus\I12l\Models\CallingCode;

class CallingCodesTableSeeder extends Seeder
{
	/**
	 * Seed the database.
	 *
	 * @return void
	 */
	public function run()
	{
		$country = I12l::getCountryByAlpha3Code('GBR');
		CallingCode::firstOrCreate([
			'country_id' => $country->id,
			'calling_code' => '44',
		]);
		$country = I12l::getCountryByAlpha3Code('IRL');
		CallingCode::firstOrCreate([
			'country_id' => $country->id,
			'calling_code' => '353'
		]);
	}
}

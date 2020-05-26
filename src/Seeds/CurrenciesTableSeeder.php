<?php

namespace PhpGuus\I12l\Seeds;

use Illuminate\Database\Seeder;
use PhpGuus\I12l\Facades\I12l;
use PhpGuus\I12l\Models\Country;
use PhpGuus\I12l\Models\Currency;

class CurrenciesTableSeeder extends Seeder
{
	/**
	 * Seed the database.
	 *
	 * @return void
	 */
	public function run()
	{
		$euro = Currency::firstOrCreate([
			'alpha3' => 'EUR',
			'minor_units' => 2,
			'name' => 'Euro',
			'numeric' => '978',
			'unicode' => '20ac'
		]);
		$sterling = Currency::firstOrCreate([
			'alpha3' => 'GBP',
			'minor_units' => 2,
			'name' => 'Pound Sterling',
			'numeric' => '826',
			'unicode' => 'a3'
		]);
		$dollar = Currency::firstOrCreate([
			'alpha3' => 'USD',
			'minor_units' => 2,
			'name' => 'US Dollar',
			'numeric' => '840',
			'unicode' => '24'
		]);

		$country = I12l::getCountryByAlpha3Code('ALA');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('AND');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('AUT');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('BEL');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('CYP');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('EST');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('FIN');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('FRA');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('GUF');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('ATF');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('DEU');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('GRC');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('GLP');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('VAT');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('IRL');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('ITA');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('LVA');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('LTU');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('LUX');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MLT');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MTQ');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MYT');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MCO');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MNE');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('NLD');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('PRT');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('REU');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('BLM');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MAF');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('SPM');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('SMR');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('SVK');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('SVN');
		$euro->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('ESP');
		$euro->countries()->attach($country->id);

		$country = I12l::getCountryByAlpha3Code('GBR');
		$sterling->countries()->attach($country->id);

		$country = I12l::getCountryByAlpha3Code('ASM');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('BES');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('IOT');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('ECU');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('SLV');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('GUM');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('HTI');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MHL');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('FSM');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('MNP');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('PLW');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('PAN');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('PRI');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('TLS');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('TCA');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('UMI');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('USA');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('VGB');
		$dollar->countries()->attach($country->id);
		$country = I12l::getCountryByAlpha3Code('VIR');
		$dollar->countries()->attach($country->id);
	}
}

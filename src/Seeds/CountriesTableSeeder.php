<?php

namespace PhpGuus\I12l\Seeds;

use Illuminate\Database\Seeder;
use PhpGuus\I12l\Models\Country;

class CountriesTableSeeder extends Seeder
{
	/**
	 * Seed the database.
	 *
	 * @return void
	 */
	public function run()
	{
		Country::firstOrCreate([
			'alpha2' => 'AF',
			'alpha3' => 'AFG',
			'numeric' => '004',
			'short_name' => 'Afghanistan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AX',
			'alpha3' => 'ALA',
			'numeric' => '248',
			'short_name' => 'Aland Islands',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AL',
			'alpha3' => 'ALB',
			'numeric' => '008',
			'short_name' => 'Albania',
		]);
		Country::firstOrCreate([
			'alpha2' => 'DZ',
			'alpha3' => 'DZA',
			'numeric' => '012',
			'short_name' => 'Algeria',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AS',
			'alpha3' => 'ASM',
			'numeric' => '016',
			'short_name' => 'American Samoa',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AD',
			'alpha3' => 'AND',
			'numeric' => '020',
			'short_name' => 'Andorra',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AO',
			'alpha3' => 'AGO',
			'numeric' => '024',
			'short_name' => 'Angola',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AI',
			'alpha3' => 'AIA',
			'numeric' => '660',
			'short_name' => 'Anguilla',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AQ',
			'alpha3' => 'ATA',
			'numeric' => '010',
			'short_name' => 'Antartica',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AG',
			'alpha3' => 'ATG',
			'numeric' => '028',
			'short_name' => 'Antigua and Barbuda',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AR',
			'alpha3' => 'ARG',
			'numeric' => '032',
			'short_name' => 'Argentina',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AM',
			'alpha3' => 'ARM',
			'numeric' => '051',
			'short_name' => 'Armenia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AW',
			'alpha3' => 'ABW',
			'numeric' => '533',
			'short_name' => 'Aruba',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AU',
			'alpha3' => 'AUS',
			'numeric' => '036',
			'short_name' => 'Australia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AT',
			'alpha3' => 'AUT',
			'numeric' => '040',
			'short_name' => 'Austria',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AZ',
			'alpha3' => 'AZE',
			'numeric' => '031',
			'short_name' => 'Azerbaijan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BS',
			'alpha3' => 'BHS',
			'numeric' => '044',
			'short_name' => 'Bahamas (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BH',
			'alpha3' => 'BHR',
			'numeric' => '048',
			'short_name' => 'Bahrain',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BD',
			'alpha3' => 'BGD',
			'numeric' => '050',
			'short_name' => 'Bangladesh',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BB',
			'alpha3' => 'BRB',
			'numeric' => '052',
			'short_name' => 'Barbados',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BY',
			'alpha3' => 'BLR',
			'numeric' => '112',
			'short_name' => 'Belarus',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BE',
			'alpha3' => 'BEL',
			'numeric' => '056',
			'short_name' => 'Belgium',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BZ',
			'alpha3' => 'BLZ',
			'numeric' => '084',
			'short_name' => 'Belize',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BJ',
			'alpha3' => 'BEN',
			'numeric' => '204',
			'short_name' => 'Benin',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BM',
			'alpha3' => 'BMU',
			'numeric' => '060',
			'short_name' => 'Bermuda',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BT',
			'alpha3' => 'BTN',
			'numeric' => '064',
			'short_name' => 'Bhutan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BO',
			'alpha3' => 'BOL',
			'numeric' => '068',
			'short_name' => 'Bolivia (Plurinational State of)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BQ',
			'alpha3' => 'BES',
			'numeric' => '535',
			'short_name' => 'Bonaire, Sint Eustasius and Saba',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BA',
			'alpha3' => 'BIH',
			'numeric' => '070',
			'short_name' => 'Bosnia and Herzegovina',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BW',
			'alpha3' => 'BWA',
			'numeric' => '072',
			'short_name' => 'Botswana',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BV',
			'alpha3' => 'BVT',
			'numeric' => '074',
			'short_name' => 'Bouvet Island',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BR',
			'alpha3' => 'BRA',
			'numeric' => '076',
			'short_name' => 'Brazil',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IO',
			'alpha3' => 'IOT',
			'numeric' => '086',
			'short_name' => 'British Indian Ocean Territory (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BN',
			'alpha3' => 'BRN',
			'numeric' => '096',
			'short_name' => 'Brunei Darussalam',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BG',
			'alpha3' => 'BGR',
			'numeric' => '100',
			'short_name' => 'Bulgaria',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BF',
			'alpha3' => 'BFA',
			'numeric' => '854',
			'short_name' => 'Burkina Faso',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BI',
			'alpha3' => 'BDI',
			'numeric' => '108',
			'short_name' => 'Burundi',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CV',
			'alpha3' => 'CPV',
			'numeric' => '132',
			'short_name' => 'Cabo Verde',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KH',
			'alpha3' => 'KHM',
			'numeric' => '116',
			'short_name' => 'Cambodia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CM',
			'alpha3' => 'CMR',
			'numeric' => '120',
			'short_name' => 'Cameroon',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CA',
			'alpha3' => 'CAN',
			'numeric' => '124',
			'short_name' => 'Canada',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KY',
			'alpha3' => 'CYM',
			'numeric' => '136',
			'short_name' => 'Cayman Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CF',
			'alpha3' => 'CAF',
			'numeric' => '140',
			'short_name' => 'Central African Republic (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TD',
			'alpha3' => 'TCD',
			'numeric' => '148',
			'short_name' => 'Chad',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CL',
			'alpha3' => 'CHL',
			'numeric' => '152',
			'short_name' => 'Chile',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CN',
			'alpha3' => 'CHN',
			'numeric' => '156',
			'short_name' => 'China',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CX',
			'alpha3' => 'CXR',
			'numeric' => '162',
			'short_name' => 'Christmas Island',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CC',
			'alpha3' => 'CCX',
			'numeric' => '166',
			'short_name' => 'Cocos (Keeling) Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CO',
			'alpha3' => 'COL',
			'numeric' => '170',
			'short_name' => 'Colombia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KM',
			'alpha3' => 'COM',
			'numeric' => '174',
			'short_name' => 'Comoros (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CD',
			'alpha3' => 'COD',
			'numeric' => '180',
			'short_name' => 'Congo (the Democratic Republic of the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CG',
			'alpha3' => 'CDG',
			'numeric' => '178',
			'short_name' => 'Congo (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CK',
			'alpha3' => 'COK',
			'numeric' => '184',
			'short_name' => 'Cook Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CR',
			'alpha3' => 'CRI',
			'numeric' => '188',
			'short_name' => 'Costa Rica',
		]);
		Country::firstOrCreate([
			'alpha2' => 'HR',
			'alpha3' => 'HRV',
			'numeric' => '191',
			'short_name' => 'Croatia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CU',
			'alpha3' => 'CUB',
			'numeric' => '192',
			'short_name' => 'Cuba',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CW',
			'alpha3' => 'CUW',
			'numeric' => '531',
			'short_name' => 'Curaçao',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CY',
			'alpha3' => 'CYP',
			'numeric' => '196',
			'short_name' => 'Cyprus',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CZ',
			'alpha3' => 'CZE',
			'numeric' => '203',
			'short_name' => 'Czechia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CI',
			'alpha3' => 'CIV',
			'numeric' => '384',
			'short_name' => 'Côte d\'Ivoire',
		]);
		Country::firstOrCreate([
			'alpha2' => 'DK',
			'alpha3' => 'DNK',
			'numeric' => '208',
			'short_name' => 'Denmark',
		]);
		Country::firstOrCreate([
			'alpha2' => 'DJ',
			'alpha3' => 'DJI',
			'numeric' => '262',
			'short_name' => 'Djibouti',
		]);
		Country::firstOrCreate([
			'alpha2' => 'DM',
			'alpha3' => 'DMA',
			'numeric' => '212',
			'short_name' => 'Dominica',
		]);
		Country::firstOrCreate([
			'alpha2' => 'DO',
			'alpha3' => 'DOM',
			'numeric' => '214',
			'short_name' => 'Dominican Republic (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'EC',
			'alpha3' => 'ECU',
			'numeric' => '218',
			'short_name' => 'Ecuador',
		]);
		Country::firstOrCreate([
			'alpha2' => 'EG',
			'alpha3' => 'EGY',
			'numeric' => '818',
			'short_name' => 'Egypt',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SV',
			'alpha3' => 'SLV',
			'numeric' => '222',
			'short_name' => 'El Salvador',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GQ',
			'alpha3' => 'GNQ',
			'numeric' => '226',
			'short_name' => 'Equatorial Guinea',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ER',
			'alpha3' => 'ERI',
			'numeric' => '232',
			'short_name' => 'Eritrea',
		]);
		Country::firstOrCreate([
			'alpha2' => 'EE',
			'alpha3' => 'EST',
			'numeric' => '233',
			'short_name' => 'Estonia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SZ',
			'alpha3' => 'SWZ',
			'numeric' => '748',
			'short_name' => 'Eswatini',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ET',
			'alpha3' => 'ETH',
			'numeric' => '231',
			'short_name' => 'Ethiopia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'FK',
			'alpha3' => 'FLK',
			'numeric' => '238',
			'short_name' => 'Falkland Islands (the) [Malvinas]',
		]);
		Country::firstOrCreate([
			'alpha2' => 'FO',
			'alpha3' => 'FRO',
			'numeric' => '234',
			'short_name' => 'Faroe Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'FJ',
			'alpha3' => 'FJI',
			'numeric' => '242',
			'short_name' => 'Fiji',
		]);
		Country::firstOrCreate([
			'alpha2' => 'FI',
			'alpha3' => 'FIN',
			'numeric' => '246',
			'short_name' => 'Finland',
		]);
		Country::firstOrCreate([
			'alpha2' => 'FR',
			'alpha3' => 'FRA',
			'numeric' => '250',
			'short_name' => 'France',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GF',
			'alpha3' => 'GUF',
			'numeric' => '254',
			'short_name' => 'French Guiana',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PF',
			'alpha3' => 'PYF',
			'numeric' => '258',
			'short_name' => 'French Polynesia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TF',
			'alpha3' => 'ATF',
			'numeric' => '260',
			'short_name' => 'French Southern Territories (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GA',
			'alpha3' => 'GAB',
			'numeric' => '266',
			'short_name' => 'Gabon',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GM',
			'alpha3' => 'GMB',
			'numeric' => '270',
			'short_name' => 'Gambia (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GE',
			'alpha3' => 'GEO',
			'numeric' => '268',
			'short_name' => 'Georgia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'DE',
			'alpha3' => 'DEU',
			'numeric' => '276',
			'short_name' => 'Germany',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GH',
			'alpha3' => 'GHA',
			'numeric' => '288',
			'short_name' => 'Ghana',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GI',
			'alpha3' => 'GIB',
			'numeric' => '292',
			'short_name' => 'Gibraltar',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GR',
			'alpha3' => 'GRC',
			'numeric' => '300',
			'short_name' => 'Greece',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GL',
			'alpha3' => 'GRL',
			'numeric' => '304',
			'short_name' => 'Greenland',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GD',
			'alpha3' => 'GRD',
			'numeric' => '308',
			'short_name' => 'Grenada',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GP',
			'alpha3' => 'GLP',
			'numeric' => '312',
			'short_name' => 'Guadeloupe',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GU',
			'alpha3' => 'GUM',
			'numeric' => '316',
			'short_name' => 'Guam',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GT',
			'alpha3' => 'GTM',
			'numeric' => '320',
			'short_name' => 'Guatemala',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GG',
			'alpha3' => 'GGY',
			'numeric' => '831',
			'short_name' => 'Guernsey',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GN',
			'alpha3' => 'GIN',
			'numeric' => '324',
			'short_name' => 'Guinea',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GW',
			'alpha3' => 'GNB',
			'numeric' => '624',
			'short_name' => 'Guinea-Bissau',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GY',
			'alpha3' => 'GUY',
			'numeric' => '328',
			'short_name' => 'Guyana',
		]);
		Country::firstOrCreate([
			'alpha2' => 'HT',
			'alpha3' => 'HTI',
			'numeric' => '332',
			'short_name' => 'Haiti',
		]);
		Country::firstOrCreate([
			'alpha2' => 'HM',
			'alpha3' => 'HMD',
			'numeric' => '334',
			'short_name' => 'Heard Island and McDonald Islands',
		]);
		Country::firstOrCreate([
			'alpha2' => 'VA',
			'alpha3' => 'VAT',
			'numeric' => '336',
			'short_name' => 'Holy See (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'HN',
			'alpha3' => 'HND',
			'numeric' => '340',
			'short_name' => 'Honduras',
		]);
		Country::firstOrCreate([
			'alpha2' => 'HK',
			'alpha3' => 'HKG',
			'numeric' => '344',
			'short_name' => 'Hong Kong',
		]);
		Country::firstOrCreate([
			'alpha2' => 'HU',
			'alpha3' => 'HUN',
			'numeric' => '348',
			'short_name' => 'Hungary',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IS',
			'alpha3' => 'ISL',
			'numeric' => '352',
			'short_name' => 'Iceland',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IN',
			'alpha3' => 'IND',
			'numeric' => '356',
			'short_name' => 'India',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ID',
			'alpha3' => 'IDN',
			'numeric' => '360',
			'short_name' => 'Indonesia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IR',
			'alpha3' => 'IRN',
			'numeric' => '364',
			'short_name' => 'Iran (Islamic Republic of)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IQ',
			'alpha3' => 'IRQ',
			'numeric' => '368',
			'short_name' => 'Iraq',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IE',
			'alpha3' => 'IRL',
			'numeric' => '372',
			'short_name' => 'Ireland',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IM',
			'alpha3' => 'IMN',
			'numeric' => '833',
			'short_name' => 'Isle of Man',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IL',
			'alpha3' => 'ISR',
			'numeric' => '376',
			'short_name' => 'Israel',
		]);
		Country::firstOrCreate([
			'alpha2' => 'IT',
			'alpha3' => 'ITA',
			'numeric' => '380',
			'short_name' => 'Italy',
		]);
		Country::firstOrCreate([
			'alpha2' => 'JM',
			'alpha3' => 'JAM',
			'numeric' => '388',
			'short_name' => 'Jamaica',
		]);
		Country::firstOrCreate([
			'alpha2' => 'JP',
			'alpha3' => 'JPN',
			'numeric' => '392',
			'short_name' => 'Japan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'JE',
			'alpha3' => 'JEY',
			'numeric' => '832',
			'short_name' => 'Jersey',
		]);
		Country::firstOrCreate([
			'alpha2' => 'JO',
			'alpha3' => 'JOR',
			'numeric' => '400',
			'short_name' => 'Jordan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KZ',
			'alpha3' => 'KAZ',
			'numeric' => '398',
			'short_name' => 'Kazakhstan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KE',
			'alpha3' => 'KEN',
			'numeric' => '404',
			'short_name' => 'Kenya',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KI',
			'alpha3' => 'KIR',
			'numeric' => '296',
			'short_name' => 'Kiribati',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KP',
			'alpha3' => 'PRK',
			'numeric' => '408',
			'short_name' => 'Korea (the Democratic People\'s Republic of)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KR',
			'alpha3' => 'KOR',
			'numeric' => '410',
			'short_name' => 'Korea (the Repubic of)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KW',
			'alpha3' => 'KWT',
			'numeric' => '414',
			'short_name' => 'Kuwait',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KG',
			'alpha3' => 'KGZ',
			'numeric' => '417',
			'short_name' => 'Kyrgyzstan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LA',
			'alpha3' => 'LAD',
			'numeric' => '418',
			'short_name' => 'Lao People\'s Democratic Republic (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LV',
			'alpha3' => 'LVA',
			'numeric' => '428',
			'short_name' => 'Latvia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LB',
			'alpha3' => 'LBN',
			'numeric' => '422',
			'short_name' => 'Lebanon',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LS',
			'alpha3' => 'LSO',
			'numeric' => '426',
			'short_name' => 'Lesotho',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LR',
			'alpha3' => 'LBR',
			'numeric' => '430',
			'short_name' => 'Liberia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LY',
			'alpha3' => 'LBY',
			'numeric' => '434',
			'short_name' => 'Libya',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LI',
			'alpha3' => 'LIE',
			'numeric' => '438',
			'short_name' => 'Liechtenstein',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LT',
			'alpha3' => 'LTU',
			'numeric' => '440',
			'short_name' => 'Lithuania',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LU',
			'alpha3' => 'LUX',
			'numeric' => '442',
			'short_name' => 'Luxembourg',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MO',
			'alpha3' => 'MAC',
			'numeric' => '446',
			'short_name' => 'Macao',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MG',
			'alpha3' => 'MDG',
			'numeric' => '450',
			'short_name' => 'Madagascar',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MW',
			'alpha3' => 'MWI',
			'numeric' => '454',
			'short_name' => 'Malawi',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MY',
			'alpha3' => 'MYS',
			'numeric' => '458',
			'short_name' => 'Malaysia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MV',
			'alpha3' => 'MDV',
			'numeric' => '462',
			'short_name' => 'Maldives',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ML',
			'alpha3' => 'MLI',
			'numeric' => '466',
			'short_name' => 'Mali',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MT',
			'alpha3' => 'MLT',
			'numeric' => '470',
			'short_name' => 'Malta',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MH',
			'alpha3' => 'MHL',
			'numeric' => '584',
			'short_name' => 'Marshall Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MQ',
			'alpha3' => 'MTQ',
			'numeric' => '474',
			'short_name' => 'Martinique',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MR',
			'alpha3' => 'MRT',
			'numeric' => '478',
			'short_name' => 'Mauritania',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MU',
			'alpha3' => 'MUS',
			'numeric' => '480',
			'short_name' => 'Mauritius',
		]);
		Country::firstOrCreate([
			'alpha2' => 'YT',
			'alpha3' => 'MYT',
			'numeric' => '175',
			'short_name' => 'Mayotte',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MX',
			'alpha3' => 'MEX',
			'numeric' => '484',
			'short_name' => 'Mexico',
		]);
		Country::firstOrCreate([
			'alpha2' => 'FM',
			'alpha3' => 'FSM',
			'numeric' => '583',
			'short_name' => 'Micronesia (Federated States of)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MD',
			'alpha3' => 'MDA',
			'numeric' => '498',
			'short_name' => 'Moldova (the Republic of)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MC',
			'alpha3' => 'MCO',
			'numeric' => '492',
			'short_name' => 'Monaco',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MN',
			'alpha3' => 'MNG',
			'numeric' => '496',
			'short_name' => 'Mongolia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ME',
			'alpha3' => 'MNE',
			'numeric' => '499',
			'short_name' => 'Montenegro',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MS',
			'alpha3' => 'MSR',
			'numeric' => '500',
			'short_name' => 'Montserrat',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MA',
			'alpha3' => 'MAR',
			'numeric' => '504',
			'short_name' => 'Morocco',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MZ',
			'alpha3' => 'MOZ',
			'numeric' => '508',
			'short_name' => 'Mozambique',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MM',
			'alpha3' => 'MMR',
			'numeric' => '104',
			'short_name' => 'Myanmar',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NA',
			'alpha3' => 'NAM',
			'numeric' => '516',
			'short_name' => 'Namibia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NR',
			'alpha3' => 'NRU',
			'numeric' => '520',
			'short_name' => 'Nauru',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NP',
			'alpha3' => 'NPL',
			'numeric' => '524',
			'short_name' => 'Nepal',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NL',
			'alpha3' => 'NLD',
			'numeric' => '528',
			'short_name' => 'Netherlands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NC',
			'alpha3' => 'NCL',
			'numeric' => '540',
			'short_name' => 'New Caledonia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NZ',
			'alpha3' => 'NZL',
			'numeric' => '554',
			'short_name' => 'New Zealand',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NI',
			'alpha3' => 'NIC',
			'numeric' => '558',
			'short_name' => 'Nicaragua',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NE',
			'alpha3' => 'NER',
			'numeric' => '562',
			'short_name' => 'Niger (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NG',
			'alpha3' => 'NGA',
			'numeric' => '566',
			'short_name' => 'Nigeria',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NU',
			'alpha3' => 'NIU',
			'numeric' => '570',
			'short_name' => 'Niue',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NF',
			'alpha3' => 'NFK',
			'numeric' => '574',
			'short_name' => 'Norfolk Island',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MK',
			'alpha3' => 'MKD',
			'numeric' => '807',
			'short_name' => 'North Macedonia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MP',
			'alpha3' => 'MNP',
			'numeric' => '580',
			'short_name' => 'Northern Mariana Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'NO',
			'alpha3' => 'NOR',
			'numeric' => '578',
			'short_name' => 'Norway',
		]);
		Country::firstOrCreate([
			'alpha2' => 'OM',
			'alpha3' => 'OMN',
			'numeric' => '512',
			'short_name' => 'Oman',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PK',
			'alpha3' => 'PAK',
			'numeric' => '586',
			'short_name' => 'Pakistan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PW',
			'alpha3' => 'PLW',
			'numeric' => '585',
			'short_name' => 'Palau',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PS',
			'alpha3' => 'PSE',
			'numeric' => '275',
			'short_name' => 'Palestine, State of',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PA',
			'alpha3' => 'PAN',
			'numeric' => '591',
			'short_name' => 'Panama',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PG',
			'alpha3' => 'PNG',
			'numeric' => '598',
			'short_name' => 'Papua New Guinea',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PY',
			'alpha3' => 'PRY',
			'numeric' => '600',
			'short_name' => 'Paraguay',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PE',
			'alpha3' => 'PER',
			'numeric' => '604',
			'short_name' => 'Peru',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PH',
			'alpha3' => 'PHL',
			'numeric' => '608',
			'short_name' => 'Philippines (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PN',
			'alpha3' => 'PCN',
			'numeric' => '612',
			'short_name' => 'Pitcaim',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PL',
			'alpha3' => 'POL',
			'numeric' => '616',
			'short_name' => 'Poland',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PT',
			'alpha3' => 'PRT',
			'numeric' => '620',
			'short_name' => 'Portugal',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PR',
			'alpha3' => 'PRI',
			'numeric' => '630',
			'short_name' => 'Puerto Rice',
		]);
		Country::firstOrCreate([
			'alpha2' => 'QA',
			'alpha3' => 'QAT',
			'numeric' => '634',
			'short_name' => 'Qatar',
		]);
		Country::firstOrCreate([
			'alpha2' => 'RO',
			'alpha3' => 'ROU',
			'numeric' => '642',
			'short_name' => 'Romania',
		]);
		Country::firstOrCreate([
			'alpha2' => 'RU',
			'alpha3' => 'RUS',
			'numeric' => '643',
			'short_name' => 'Russian Federation (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'RW',
			'alpha3' => 'RWA',
			'numeric' => '646',
			'short_name' => 'Rwanda',
		]);
		Country::firstOrCreate([
			'alpha2' => 'RE',
			'alpha3' => 'REU',
			'numeric' => '638',
			'short_name' => 'Réunion',
		]);
		Country::firstOrCreate([
			'alpha2' => 'BL',
			'alpha3' => 'BLM',
			'numeric' => '652',
			'short_name' => 'Saint Barthélemy',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SH',
			'alpha3' => 'SHN',
			'numeric' => '654',
			'short_name' => 'Saint Helena, Ascension and Tristan da Cunha',
		]);
		Country::firstOrCreate([
			'alpha2' => 'KN',
			'alpha3' => 'KNA',
			'numeric' => '659',
			'short_name' => 'Saint Kitts and Nevis',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LC',
			'alpha3' => 'LCA',
			'numeric' => '662',
			'short_name' => 'Saint Lucia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'MF',
			'alpha3' => 'MAF',
			'numeric' => '663',
			'short_name' => 'Saint Martin (French Part)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'PM',
			'alpha3' => 'SPM',
			'numeric' => '666',
			'short_name' => 'Saint Pierre and Miquelon',
		]);
		Country::firstOrCreate([
			'alpha2' => 'VC',
			'alpha3' => 'VCT',
			'numeric' => '670',
			'short_name' => 'Saint Vincent and the Grenadines',
		]);
		Country::firstOrCreate([
			'alpha2' => 'WS',
			'alpha3' => 'WSM',
			'numeric' => '882',
			'short_name' => 'Samoa',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SM',
			'alpha3' => 'SMR',
			'numeric' => '674',
			'short_name' => 'San Marino',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ST',
			'alpha3' => 'STP',
			'numeric' => '678',
			'short_name' => 'Sao Tome and Principe',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SA',
			'alpha3' => 'SAU',
			'numeric' => '682',
			'short_name' => 'Saudi Arabia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SN',
			'alpha3' => 'SEN',
			'numeric' => '686',
			'short_name' => 'Senegal',
		]);
		Country::firstOrCreate([
			'alpha2' => 'RS',
			'alpha3' => 'SRB',
			'numeric' => '688',
			'short_name' => 'Serbia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SC',
			'alpha3' => 'SYC',
			'numeric' => '690',
			'short_name' => 'Seychelles',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SL',
			'alpha3' => 'SLE',
			'numeric' => '694',
			'short_name' => 'Sierra Leone',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SG',
			'alpha3' => 'SGP',
			'numeric' => '702',
			'short_name' => 'Singapore',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SX',
			'alpha3' => 'SXM',
			'numeric' => '534',
			'short_name' => 'Sint Maarten (Dutch part)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SK',
			'alpha3' => 'SVK',
			'numeric' => '703',
			'short_name' => 'Slovakia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SI',
			'alpha3' => 'SVN',
			'numeric' => '705',
			'short_name' => 'Slovenia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SB',
			'alpha3' => 'SLB',
			'numeric' => '090',
			'short_name' => 'Solomon Islands',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SO',
			'alpha3' => 'SOM',
			'numeric' => '706',
			'short_name' => 'Somalia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ZA',
			'alpha3' => 'ZAF',
			'numeric' => '710',
			'short_name' => 'South Africa',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GS',
			'alpha3' => 'SGS',
			'numeric' => '239',
			'short_name' => 'South Georgia and the South Sandwich Islands',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SS',
			'alpha3' => 'SSD',
			'numeric' => '728',
			'short_name' => 'South Sudan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ES',
			'alpha3' => 'ESP',
			'numeric' => '724',
			'short_name' => 'Spain',
		]);
		Country::firstOrCreate([
			'alpha2' => 'LK',
			'alpha3' => 'LKA',
			'numeric' => '144',
			'short_name' => 'Sri Lanka',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SD',
			'alpha3' => 'SDN',
			'numeric' => '729',
			'short_name' => 'Sudan (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SR',
			'alpha3' => 'SUR',
			'numeric' => '740',
			'short_name' => 'Surinam',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SJ',
			'alpha3' => 'SJM',
			'numeric' => '744',
			'short_name' => 'Swalbard and Jan Mayen',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SE',
			'alpha3' => 'SWE',
			'numeric' => '752',
			'short_name' => 'Sweden',
		]);
		Country::firstOrCreate([
			'alpha2' => 'CH',
			'alpha3' => 'CHE',
			'numeric' => '756',
			'short_name' => 'Switzerland',
		]);
		Country::firstOrCreate([
			'alpha2' => 'SY',
			'alpha3' => 'SYR',
			'numeric' => '760',
			'short_name' => 'Syrian Arab Republic (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TW',
			'alpha3' => 'TWN',
			'numeric' => '158',
			'short_name' => 'Taiwan (Province of China)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TJ',
			'alpha3' => 'TJK',
			'numeric' => '762',
			'short_name' => 'Tajikistan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TZ',
			'alpha3' => 'TZA',
			'numeric' => '834',
			'short_name' => 'Tanzania, the Republic of',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TH',
			'alpha3' => 'THA',
			'numeric' => '764',
			'short_name' => 'Thailand',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TL',
			'alpha3' => 'TLS',
			'numeric' => '626',
			'short_name' => 'Timor-Leste',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TG',
			'alpha3' => 'TGO',
			'numeric' => '768',
			'short_name' => 'Togo',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TK',
			'alpha3' => 'TKL',
			'numeric' => '772',
			'short_name' => 'Tokelau',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TO',
			'alpha3' => 'TON',
			'numeric' => '776',
			'short_name' => 'Tonga',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TT',
			'alpha3' => 'TTO',
			'numeric' => '780',
			'short_name' => 'Trinidad and Tobago',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TN',
			'alpha3' => 'TUN',
			'numeric' => '788',
			'short_name' => 'Tunisia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TR',
			'alpha3' => 'TUR',
			'numeric' => '792',
			'short_name' => 'Turkey',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TM',
			'alpha3' => 'TKM',
			'numeric' => '795',
			'short_name' => 'Turkmenistan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TC',
			'alpha3' => 'TCA',
			'numeric' => '796',
			'short_name' => 'Turks and Caicos Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'TV',
			'alpha3' => 'TUV',
			'numeric' => '798',
			'short_name' => 'Tuvalu',
		]);
		Country::firstOrCreate([
			'alpha2' => 'UG',
			'alpha3' => 'UGA',
			'numeric' => '800',
			'short_name' => 'Uganda',
		]);
		Country::firstOrCreate([
			'alpha2' => 'UA',
			'alpha3' => 'UKR',
			'numeric' => '804',
			'short_name' => 'Ukraine',
		]);
		Country::firstOrCreate([
			'alpha2' => 'AE',
			'alpha3' => 'ARE',
			'numeric' => '784',
			'short_name' => 'United Arab Emirates (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'GB',
			'alpha3' => 'GBR',
			'numeric' => '826',
			'short_name' => 'United Kingdom of Great Britain and Northern ' .
				'Ireland (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'UM',
			'alpha3' => 'UMI',
			'numeric' => '581',
			'short_name' => 'United States Minor Outlying Islands (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'US',
			'alpha3' => 'USA',
			'numeric' => '840',
			'short_name' => 'United States of America (the)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'UY',
			'alpha3' => 'URY',
			'numeric' => '858',
			'short_name' => 'Uruguay',
		]);
		Country::firstOrCreate([
			'alpha2' => 'UZ',
			'alpha3' => 'UZB',
			'numeric' => '860',
			'short_name' => 'Uzbekistan',
		]);
		Country::firstOrCreate([
			'alpha2' => 'VU',
			'alpha3' => 'VUT',
			'numeric' => '548',
			'short_name' => 'Vanuatu',
		]);
		Country::firstOrCreate([
			'alpha2' => 'VE',
			'alpha3' => 'VEN',
			'numeric' => '862',
			'short_name' => 'Venezuela (Bolivarian Republic of)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'VN',
			'alpha3' => 'VNM',
			'numeric' => '704',
			'short_name' => 'Viet Nam',
		]);
		Country::firstOrCreate([
			'alpha2' => 'VG',
			'alpha3' => 'VGB',
			'numeric' => '092',
			'short_name' => 'Virgin Islands (British)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'VI',
			'alpha3' => 'VIR',
			'numeric' => '850',
			'short_name' => 'Virgin islands (U.S.)',
		]);
		Country::firstOrCreate([
			'alpha2' => 'WF',
			'alpha3' => 'WLF',
			'numeric' => '876',
			'short_name' => 'Wallis an Futuna',
		]);
		Country::firstOrCreate([
			'alpha2' => 'EH',
			'alpha3' => 'ESH',
			'numeric' => '732',
			'short_name' => 'Western Sahara',
		]);
		Country::firstOrCreate([
			'alpha2' => 'YE',
			'alpha3' => 'YEM',
			'numeric' => '887',
			'short_name' => 'Yemen',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ZM',
			'alpha3' => 'ZMB',
			'numeric' => '894',
			'short_name' => 'Zambia',
		]);
		Country::firstOrCreate([
			'alpha2' => 'ZW',
			'alpha3' => 'ZWE',
			'numeric' => '716',
			'short_name' => 'Zimbabwe',
		]);

	}
}

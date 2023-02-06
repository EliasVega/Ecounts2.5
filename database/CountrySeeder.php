<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'id' => 1,
                'name' => 'Afghanistan',
                'code' => 'AF',
                'code_phone' =>	93
            ],
            [
                'id' => 2,
                'name' => 'Albania',
                'code' => 'AL',
                'code_phone' =>	355
            ],
            [
                'id' => 3,
                'name' => 'Algeria',
                'code' => 'DZ',
                'code_phone' =>	213
            ],
            [
                'id' => 4,
                'name' => 'American Samoa',
                'code' => 'AS',
                'code_phone' =>	1684
            ],
            [
                'id' => 5,
                'name' => 'Andorra',
                'code' => 'AD',
                'code_phone' =>	376
            ],
            [
                'id' => 6,
                'name' => 'Angola',
                'code' => 'AO',
                'code_phone' =>	244
            ],
            [
                'id' => 7,
                'name' => 'Anguilla',
                'code' => 'AI',
                'code_phone' =>	1264
            ],
            [
                'id' => 8,
                'name' => 'Antarctica',
                'code' => 'AQ',
                'code_phone' =>	0
            ],
            [
                'id' => 9,
                'name' => 'Antigua And Barbuda',
                'code' => 'AG',
                'code_phone' =>	1268
            ],
            [
                'id' => 10,
                'name' => 'Argentina',
                'code' => 'AR',
                'code_phone' =>	54
            ],
            [
                'id' => 11,
                'name' => 'Armenia',
                'code' => 'AM',
                'code_phone' =>	374
            ],
            [
                'id' => 12,
                'name' => 'Aruba',
                'code' => 'AW',
                'code_phone' =>	297
            ],
            [
                'id' => 13,
                'name' => 'Australia',
                'code' => 'AU',
                'code_phone' =>	61
            ],
            [
                'id' => 14,
                'name' => 'Austria',
                'code' => 'AT',
                'code_phone' =>	43
            ],
            [
                'id' => 15,
                'name' => 'Azerbaijan',
                'code' => 'AZ',
                'code_phone' =>	994
            ],
            [
                'id' => 16,
                'name' => 'Bahamas The',
                'code' => 'BS',
                'code_phone' =>	1242
            ],
            [
                'id' => 17,
                'name' => 'Bahrain',
                'code' => 'BH',
                'code_phone' =>	973
            ],
            [
                'id' => 18,
                'name' => 'Bangladesh',
                'code' => 'BD',
                'code_phone' =>	880
            ],
            [
                'id' => 19,
                'name' => 'Barbados',
                'code' => 'BB',
                'code_phone' =>	1246
            ],
            [
                'id' => 20,
                'name' => 'Belarus',
                'code' => 'BY',
                'code_phone' =>	375
            ],
            [
                'id' => 21,
                'name' => 'Belgium',
                'code' => 'BE',
                'code_phone' =>	32
            ],
            [
                'id' => 22,
                'name' => 'Belize',
                'code' => 'BZ',
                'code_phone' =>	501
            ],
            [
                'id' => 23,
                'name' => 'Benin',
                'code' => 'BJ',
                'code_phone' =>	229
            ],
            [
                'id' => 24,
                'name' => 'Bermuda',
                'code' => 'BM',
                'code_phone' =>	1441
            ],
            [
                'id' => 25,
                'name' => 'Bhutan',
                'code' => 'BT',
                'code_phone' =>	975
            ],
            [
                'id' => 26,
                'name' => 'Bolivia',
                'code' => 'BO',
                'code_phone' =>	591
            ],
            [
                'id' => 27,
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'code_phone' =>	387
            ],
            [
                'id' => 28,
                'name' => 'Botswana',
                'code' => 'BW',
                'code_phone' =>	267
            ],
            [
                'id' => 29,
                'name' => 'Bouvet Island',
                'code' => 'BV',
                'code_phone' =>	0
            ],
            [
                'id' => 30,
                'name' => 'Brazil',
                'code' => 'BR',
                'code_phone' =>	55
            ],
            [
                'id' => 31,
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO',
                'code_phone' =>	246
            ],
            [
                'id' => 32,
                'name' => 'Brunei',
                'code' => 'BN',
                'code_phone' =>	673
            ],
            [
                'id' => 33,
                'name' => 'Bulgaria',
                'code' => 'BG',
                'code_phone' =>	359
            ],
            [
                'id' => 34,
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'code_phone' =>	226
            ],
            [
                'id' => 35,
                'name' => 'Burundi',
                'code' => 'BI',
                'code_phone' =>	257
            ],
            [
                'id' => 36,
                'name' => 'Cambodia',
                'code' => 'KH',
                'code_phone' =>	855
            ],
            [
                'id' => 37,
                'name' => 'Cameroon',
                'code' => 'CM',
                'code_phone' =>	237
            ],
            [
                'id' => 38,
                'name' => 'Canada',
                'code' => 'CA',
                'code_phone' =>	1
            ],
            [
                'id' => 39,
                'name' => 'Cape Verde',
                'code' => 'CV',
                'code_phone' =>	238
            ],
            [
                'id' => 40,
                'name' => 'Cayman Islands',
                'code' => 'KY',
                'code_phone' =>	1345
            ],
            [
                'id' => 41,
                'name' => 'Central African Republic',
                'code' => 'CF',
                'code_phone' =>	236
            ],
            [
                'id' => 42,
                'name' => 'Chad',
                'code' => 'TD',
                'code_phone' =>	235
            ],
            [
                'id' => 43,
                'name' => 'Chile',
                'code' => 'CL',
                'code_phone' =>	56
            ],
            [
                'id' => 44,
                'name' => 'China',
                'code' => 'CN',
                'code_phone' =>	86
            ],
            [
                'id' => 45,
                'name' => 'Christmas Island',
                'code' => 'CX',
                'code_phone' =>	61
            ],
            [
                'id' => 46,
                'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
                'code_phone' =>	672
            ],
            [
                'id' => 47,
                'name' => 'Colombia',
                'code' => 'CO',
                'code_phone' =>	57
            ],
            [
                'id' => 48,
                'name' => 'Comoros',
                'code' => 'KM',
                'code_phone' =>	269
            ],
            [
                'id' => 49,
                'name' => 'Republic Of The Congo',
                'code' => 'CG',
                'code_phone' =>	242
            ],
            [
                'id' => 50,
                'name' => 'Democratic Republic Of The Congo',
                'code' => 'CD',
                'code_phone' =>	242
            ],
            [
                'id' => 51,
                'name' => 'Cook Islands',
                'code' => 'CK',
                'code_phone' =>	682
            ],
            [
                'id' => 52,
                'name' => 'Costa Rica',
                'code' => 'CR',
                'code_phone' =>	506
            ],
            [
                'id' => 53,
                'name' => 'Cote D\Ivoire (Ivory Coast)',
                'code' => 'CI',
                'code_phone' =>	225
            ],
            [
                'id' => 54,
                'name' => 'Croatia (Hrvatska)',
                'code' => 'HR',
                'code_phone' =>	385
            ],
            [
                'id' => 55,
                'name' => 'Cuba',
                'code' => 'CU',
                'code_phone' =>	53
            ],
            [
                'id' => 56,
                'name' => 'Cyprus',
                'code' => 'CY',
                'code_phone' =>	357
            ],
            [
                'id' => 57,
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'code_phone' =>	420
            ],
            [
                'id' => 58,
                'name' => 'Denmark',
                'code' => 'DK',
                'code_phone' =>	45
            ],
            [
                'id' => 59,
                'name' => 'Djibouti',
                'code' => 'DJ',
                'code_phone' =>	253
            ],
            [
                'id' => 60,
                'name' => 'Dominica',
                'code' => 'DM',
                'code_phone' =>	1767
            ],
            [
                'id' => 61,
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'code_phone' =>	1809
            ],
            [
                'id' => 62,
                'name' => 'East Timor',
                'code' => 'TP',
                'code_phone' =>	670
            ],
            [
                'id' => 63,
                'name' => 'Ecuador',
                'code' => 'EC',
                'code_phone' =>	593
            ],
            [
                'id' => 64,
                'name' => 'Egypt',
                'code' => 'EG',
                'code_phone' =>	20
            ],
            [
                'id' => 65,
                'name' => 'El Salvador',
                'code' => 'SV',
                'code_phone' =>	503
            ],
            [
                'id' => 66,
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'code_phone' =>	240
            ],
            [
                'id' => 67,
                'name' => 'Eritrea',
                'code' => 'ER',
                'code_phone' =>	291
            ],
            [
                'id' => 68,
                'name' => 'Estonia',
                'code' => 'EE',
                'code_phone' =>	372
            ],
            [
                'id' => 69,
                'name' => 'Ethiopia',
                'code' => 'ET',
                'code_phone' =>	251
            ],
            [
                'id' => 70,
                'name' => 'External Territories of Australia',
                'code' => 'XA',
                'code_phone' =>	61
            ],
            [
                'id' => 71,
                'name' => 'Falkland Islands',
                'code' => 'FK',
                'code_phone' =>	500
            ],
            [
                'id' => 72,
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'code_phone' =>	298
            ],
            [
                'id' => 73,
                'name' => 'Fiji Islands',
                'code' => 'FJ',
                'code_phone' =>	679
            ],
            [
                'id' => 74,
                'name' => 'Finland',
                'code' => 'FI',
                'code_phone' =>	358
            ],
            [
                'id' => 75,
                'name' => 'France',
                'code' => 'FR',
                'code_phone' =>	33
            ],
            [
                'id' => 76,
                'name' => 'French Guiana',
                'code' => 'GF',
                'code_phone' =>	594
            ],
            [
                'id' => 77,
                'name' => 'French Polynesia',
                'code' => 'PF',
                'code_phone' =>	689
            ],
            [
                'id' => 78,
                'name' => 'French Southern Territories',
                'code' => 'TF',
                'code_phone' =>	0
            ],
            [
                'id' => 79,
                'name' => 'Gabon',
                'code' => 'GA',
                'code_phone' =>	241
            ],
            [
                'id' => 80,
                'name' => 'Gambia The',
                'code' => 'GM',
                'code_phone' =>	220
            ],
            [
                'id' => 81,
                'name' => 'Georgia',
                'code' => 'GE',
                'code_phone' =>	995
            ],
            [
                'id' => 82,
                'name' => 'Germany',
                'code' => 'DE',
                'code_phone' =>	49
            ],
            [
                'id' => 83,
                'name' => 'Ghana',
                'code' => 'GH',
                'code_phone' =>	233
            ],
            [
                'id' => 84,
                'name' => 'Gibraltar',
                'code' => 'GI',
                'code_phone' =>	350
            ],
            [
                'id' => 85,
                'name' => 'Greece',
                'code' => 'GR',
                'code_phone' =>	30
            ],
            [
                'id' => 86,
                'name' => 'Greenland',
                'code' => 'GL',
                'code_phone' =>	299
            ],
            [
                'id' => 87,
                'name' => 'Grenada',
                'code' => 'GD',
                'code_phone' =>	1473
            ],
            [
                'id' => 88,
                'name' => 'Guadeloupe',
                'code' => 'GP',
                'code_phone' =>	590
            ],
            [
                'id' => 89,
                'name' => 'Guam',
                'code' => 'GU',
                'code_phone' =>	1671
            ],
            [
                'id' => 90,
                'name' => 'Guatemala',
                'code' => 'GT',
                'code_phone' =>	502
            ],
            [
                'id' => 91,
                'name' => 'Guernsey and Alderney',
                'code' => 'XU',
                'code_phone' =>	44
            ],
            [
                'id' => 92,
                'name' => 'Guinea',
                'code' => 'GN',
                'code_phone' =>	224
            ],
            [
                'id' => 93,
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
                'code_phone' =>	245
            ],
            [
                'id' => 94,
                'name' => 'Guyana',
                'code' => 'GY',
                'code_phone' =>	592
            ],
            [
                'id' => 95,
                'name' => 'Haiti',
                'code' => 'HT',
                'code_phone' =>	509
            ],
            [
                'id' => 96,
                'name' => 'Heard and McDonald Islands',
                'code' => 'HM',
                'code_phone' =>	0
            ],
            [
                'id' => 97,
                'name' => 'Honduras',
                'code' => 'HN',
                'code_phone' =>	504
            ],
            [
                'id' => 98,
                'name' => 'Hong Kong S.A.R.',
                'code' => 'HK',
                'code_phone' =>	852
            ],
            [
                'id' => 99,
                'name' => 'Hungary',
                'code' => 'HU',
                'code_phone' =>	36
            ],
            [
                'id' => 100,
                'name' => 'Iceland',
                'code' => 'IS',
                'code_phone' =>	354
            ],
            [
                'id' => 101,
                'name' => 'India',
                'code' => 'IN',
                'code_phone' =>	91
            ],
            [
                'id' => 102,
                'name' => 'Indonesia',
                'code' => 'ID',
                'code_phone' =>	62
            ],
            [
                'id' => 103,
                'name' => 'Iran',
                'code' => 'IR',
                'code_phone' =>	98
            ],
            [
                'id' => 104,
                'name' => 'Iraq',
                'code' => 'IQ',
                'code_phone' =>	964
            ],
            [
                'id' => 105,
                'name' => 'Ireland',
                'code' => 'IE',
                'code_phone' =>	353
            ],
            [
                'id' => 106,
                'name' => 'Israel',
                'code' => 'IL',
                'code_phone' =>	972
            ],
            [
                'id' => 107,
                'name' => 'Italy',
                'code' => 'IT',
                'code_phone' =>	39
            ],
            [
                'id' => 108,
                'name' => 'Jamaica',
                'code' => 'JM',
                'code_phone' =>	1876
            ],
            [
                'id' => 109,
                'name' => 'Japan',
                'code' => 'JP',
                'code_phone' =>	81
            ],
            [
                'id' => 110,
                'name' => 'Jersey',
                'code' => 'XJ',
                'code_phone' =>	44
            ],
            [
                'id' => 111,
                'name' => 'Jordan',
                'code' => 'JO',
                'code_phone' =>	962
            ],
            [
                'id' => 112,
                'name' => 'Kazakhstan',
                'code' => 'KZ',
                'code_phone' =>	7
            ],
            [
                'id' => 113,
                'name' => 'Kenya',
                'code' => 'KE',
                'code_phone' =>	254
            ],
            [
                'id' => 114,
                'name' => 'Kiribati',
                'code' => 'KI',
                'code_phone' =>	686
            ],
            [
                'id' => 115,
                'name' => 'Korea North',
                'code' => 'KP',
                'code_phone' =>	850
            ],
            [
                'id' => 116,
                'name' => 'Korea South',
                'code' => 'KR',
                'code_phone' =>	82
            ],
            [
                'id' => 117,
                'name' => 'Kuwait',
                'code' => 'KW',
                'code_phone' =>	965
            ],
            [
                'id' => 118,
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
                'code_phone' =>	996
            ],
            [
                'id' => 119,
                'name' => 'Laos',
                'code' => 'LA',
                'code_phone' =>	856
            ],
            [
                'id' => 120,
                'name' => 'Latvia',
                'code' => 'LV',
                'code_phone' =>	371
            ],
            [
                'id' => 121,
                'name' => 'Lebanon',
                'code' => 'LB',
                'code_phone' =>	961
            ],
            [
                'id' => 122,
                'name' => 'Lesotho',
                'code' => 'LS',
                'code_phone' =>	266
            ],
            [
                'id' => 123,
                'name' => 'Liberia',
                'code' => 'LR',
                'code_phone' =>	231
            ],
            [
                'id' => 124,
                'name' => 'Libya',
                'code' => 'LY',
                'code_phone' =>	218
            ],
            [
                'id' => 125,
                'name' => 'Liechtenstein',
                'code' => 'LI',
                'code_phone' =>	423
            ],
            [
                'id' => 126,
                'name' => 'Lithuania',
                'code' => 'LT',
                'code_phone' =>	370
            ],
            [
                'id' => 127,
                'name' => 'Luxembourg',
                'code' => 'LU',
                'code_phone' =>	352
            ],
            [
                'id' => 128,
                'name' => 'Macau S.A.R.',
                'code' => 'MO',
                'code_phone' =>	853
            ],
            [
                'id' => 129,
                'name' => 'Macedonia',
                'code' => 'MK',
                'code_phone' =>	389
            ],
            [
                'id' => 130,
                'name' => 'Madagascar',
                'code' => 'MG',
                'code_phone' =>	261
            ],
            [
                'id' => 131,
                'name' => 'Malawi',
                'code' => 'MW',
                'code_phone' =>	265
            ],
            [
                'id' => 132,
                'name' => 'Malaysia',
                'code' => 'MY',
                'code_phone' =>	60
            ],
            [
                'id' => 133,
                'name' => 'Maldives',
                'code' => 'MV',
                'code_phone' =>	960
            ],
            [
                'id' => 134,
                'name' => 'Mali',
                'code' => 'ML',
                'code_phone' =>	223
            ],
            [
                'id' => 135,
                'name' => 'Malta',
                'code' => 'MT',
                'code_phone' =>	356
            ],
            [
                'id' => 136,
                'name' => 'Man (Isle of)',
                'code' => 'XM',
                'code_phone' =>	44
            ],
            [
                'id' => 137,
                'name' => 'Marshall Islands',
                'code' => 'MH',
                'code_phone' =>	692
            ],
            [
                'id' => 138,
                'name' => 'Martinique',
                'code' => 'MQ',
                'code_phone' =>	596
            ],
            [
                'id' => 139,
                'name' => 'Mauritania',
                'code' => 'MR',
                'code_phone' =>	222
            ],
            [
                'id' => 140,
                'name' => 'Mauritius',
                'code' => 'MU',
                'code_phone' =>	230
            ],
            [
                'id' => 141,
                'name' => 'Mayotte',
                'code' => 'YT',
                'code_phone' =>	269
            ],
            [
                'id' => 142,
                'name' => 'Mexico',
                'code' => 'MX',
                'code_phone' =>	52
            ],
            [
                'id' => 143,
                'name' => 'Micronesia',
                'code' => 'FM',
                'code_phone' =>	691
            ],
            [
                'id' => 144,
                'name' => 'Moldova',
                'code' => 'MD',
                'code_phone' =>	373
            ],
            [
                'id' => 145,
                'name' => 'Monaco',
                'code' => 'MC',
                'code_phone' =>	377
            ],
            [
                'id' => 146,
                'name' => 'Mongolia',
                'code' => 'MN',
                'code_phone' =>	976
            ],
            [
                'id' => 147,
                'name' => 'Montserrat',
                'code' => 'MS',
                'code_phone' =>	1664
            ],
            [
                'id' => 148,
                'name' => 'Morocco',
                'code' => 'MA',
                'code_phone' =>	212
            ],
            [
                'id' => 149,
                'name' => 'Mozambique',
                'code' => 'MZ',
                'code_phone' =>	258
            ],
            [
                'id' => 150,
                'name' => 'Myanmar',
                'code' => 'MM',
                'code_phone' =>	95
            ],
            [
                'id' => 151,
                'name' => 'Namibia',
                'code' => 'NA',
                'code_phone' =>	264
            ],
            [
                'id' => 152,
                'name' => 'Nauru',
                'code' => 'NR',
                'code_phone' =>	674
            ],
            [
                'id' => 153,
                'name' => 'Nepal',
                'code' => 'NP',
                'code_phone' =>	977
            ],
            [
                'id' => 154,
                'name' => 'Netherlands Antilles',
                'code' => 'AN',
                'code_phone' =>	599
            ],
            [
                'id' => 155,
                'name' => 'Netherlands The',
                'code' => 'NL',
                'code_phone' =>	31
            ],
            [
                'id' => 156,
                'name' => 'New Caledonia',
                'code' => 'NC',
                'code_phone' =>	687
            ],
            [
                'id' => 157,
                'name' => 'New Zealand',
                'code' => 'NZ',
                'code_phone' =>	64
            ],
            [
                'id' => 158,
                'name' => 'Nicaragua',
                'code' => 'NI',
                'code_phone' =>	505
            ],
            [
                'id' => 159,
                'name' => 'Niger',
                'code' => 'NE',
                'code_phone' =>	227
            ],
            [
                'id' => 160,
                'name' => 'Nigeria',
                'code' => 'NG',
                'code_phone' =>	234
            ],
            [
                'id' => 161,
                'name' => 'Niue',
                'code' => 'NU',
                'code_phone' =>	683
            ],
            [
                'id' => 162,
                'name' => 'Norfolk Island',
                'code' => 'NF',
                'code_phone' =>	672
            ],
            [
                'id' => 163,
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'code_phone' =>	1670
            ],
            [
                'id' => 164,
                'name' => 'Norway',
                'code' => 'NO',
                'code_phone' =>	47
            ],
            [
                'id' => 165,
                'name' => 'Oman',
                'code' => 'OM',
                'code_phone' =>	968
            ],
            [
                'id' => 166,
                'name' => 'Pakistan',
                'code' => 'PK',
                'code_phone' =>	92
            ],
            [
                'id' => 167,
                'name' => 'Palau',
                'code' => 'PW',
                'code_phone' =>	680
            ],
            [
                'id' => 168,
                'name' => 'Palestinian Territory Occupied',
                'code' => 'PS',
                'code_phone' =>	970
            ],
            [
                'id' => 169,
                'name' => 'Panama',
                'code' => 'PA',
                'code_phone' =>	507
            ],
            [
                'id' => 170,
                'name' => 'Papua new Guinea',
                'code' => 'PG',
                'code_phone' =>	675
            ],
            [
                'id' => 171,
                'name' => 'Paraguay',
                'code' => 'PY',
                'code_phone' =>	595
            ],
            [
                'id' => 172,
                'name' => 'Peru',
                'code' => 'PE',
                'code_phone' =>	51
            ],
            [
                'id' => 173,
                'name' => 'Philippines',
                'code' => 'PH',
                'code_phone' =>	63
            ],
            [
                'id' => 174,
                'name' => 'Pitcairn Island',
                'code' => 'PN',
                'code_phone' =>	0
            ],
            [
                'id' => 175,
                'name' => 'Poland',
                'code' => 'PL',
                'code_phone' =>	48
            ],
            [
                'id' => 176,
                'name' => 'Portugal',
                'code' => 'PT',
                'code_phone' =>	351
            ],
            [
                'id' => 177,
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'code_phone' =>	1787
            ],
            [
                'id' => 178,
                'name' => 'Qatar',
                'code' => 'QA',
                'code_phone' =>	974
            ],
            [
                'id' => 179,
                'name' => 'Reunion',
                'code' => 'RE',
                'code_phone' =>	262
            ],
            [
                'id' => 180,
                'name' => 'Romania',
                'code' => 'RO',
                'code_phone' =>	40
            ],
            [
                'id' => 181,
                'name' => 'Russia',
                'code' => 'RU',
                'code_phone' =>	70
            ],
            [
                'id' => 182,
                'name' => 'Rwanda',
                'code' => 'RW',
                'code_phone' =>	250
            ],
            [
                'id' => 183,
                'name' => 'Saint Helena',
                'code' => 'SH',
                'code_phone' =>	290
            ],
            [
                'id' => 184,
                'name' => 'Saint Kitts And Nevis',
                'code' => 'KN',
                'code_phone' =>	1869
            ],
            [
                'id' => 185,
                'name' => 'Saint Lucia',
                'code' => 'LC',
                'code_phone' =>	1758
            ],
            [
                'id' => 186,
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'PM',
                'code_phone' =>	508
            ],
            [
                'id' => 187,
                'name' => 'Saint Vincent And The Grenadines',
                'code' => 'VC',
                'code_phone' =>	1784
            ],
            [
                'id' => 188,
                'name' => 'Samoa',
                'code' => 'WS',
                'code_phone' =>	684
            ],
            [
                'id' => 189,
                'name' => 'San Marino',
                'code' => 'SM',
                'code_phone' =>	378
            ],
            [
                'id' => 190,
                'name' => 'Sao Tome and Principe',
                'code' => 'ST',
                'code_phone' =>	239
            ],
            [
                'id' => 191,
                'name' => 'Saudi Arabia',
                'code' => 'SA',
                'code_phone' =>	966
            ],
            [
                'id' => 192,
                'name' => 'Senegal',
                'code' => 'SN',
                'code_phone' =>	221
            ],
            [
                'id' => 193,
                'name' => 'Serbia',
                'code' => 'RS',
                'code_phone' =>	381
            ],
            [
                'id' => 194,
                'name' => 'Seychelles',
                'code' => 'SC',
                'code_phone' =>	248
            ],
            [
                'id' => 195,
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'code_phone' =>	232
            ],
            [
                'id' => 196,
                'name' => 'Singapore',
                'code' => 'SG',
                'code_phone' =>	65
            ],
            [
                'id' => 197,
                'name' => 'Slovakia',
                'code' => 'SK',
                'code_phone' =>	421
            ],
            [
                'id' => 198,
                'name' => 'Slovenia',
                'code' => 'SI',
                'code_phone' =>	386
            ],
            [
                'id' => 199,
                'name' => 'Smaller Territories of the UK',
                'code' => 'XG',
                'code_phone' =>	44
            ],
            [
                'id' => 200,
                'name' => 'Solomon Islands',
                'code' => 'SB',
                'code_phone' =>	677
            ],
            [
                'id' => 201,
                'name' => 'Somalia',
                'code' => 'SO',
                'code_phone' =>	252
            ],
            [
                'id' => 202,
                'name' => 'South Africa',
                'code' => 'ZA',
                'code_phone' =>	27
            ],
            [
                'id' => 203,
                'name' => 'South Georgia',
                'code' => 'GS',
                'code_phone' =>	0
            ],
            [
                'id' => 204,
                'name' => 'South Sudan',
                'code' => 'SS',
                'code_phone' =>	211
            ],
            [
                'id' => 205,
                'name' => 'Spain',
                'code' => 'ES',
                'code_phone' =>	34
            ],
            [
                'id' => 206,
                'name' => 'Sri Lanka',
                'code' => 'LK',
                'code_phone' =>	94
            ],
            [
                'id' => 207,
                'name' => 'Sudan',
                'code' => 'SD',
                'code_phone' =>	249
            ],
            [
                'id' => 208,
                'name' => 'Suriname',
                'code' => 'SR',
                'code_phone' =>	597
            ],
            [
                'id' => 209,
                'name' => 'Svalbard And Jan Mayen Islands',
                'code' => 'SJ',
                'code_phone' =>	47
            ],
            [
                'id' => 210,
                'name' => 'Swaziland',
                'code' => 'SZ',
                'code_phone' =>	268
            ],
            [
                'id' => 211,
                'name' => 'Sweden',
                'code' => 'SE',
                'code_phone' =>	46
            ],
            [
                'id' => 212,
                'name' => 'Switzerland',
                'code' => 'CH',
                'code_phone' =>	41
            ],
            [
                'id' => 213,
                'name' => 'Syria',
                'code' => 'SY',
                'code_phone' =>	963
            ],
            [
                'id' => 214,
                'name' => 'Taiwan',
                'code' => 'TW',
                'code_phone' =>	886
            ],
            [
                'id' => 215,
                'name' => 'Tajikistan',
                'code' => 'TJ',
                'code_phone' =>	992
            ],
            [
                'id' => 216,
                'name' => 'Tanzania',
                'code' => 'TZ',
                'code_phone' =>	255
            ],
            [
                'id' => 217,
                'name' => 'Thailand',
                'code' => 'TH',
                'code_phone' =>	66
            ],
            [
                'id' => 218,
                'name' => 'Togo',
                'code' => 'TG',
                'code_phone' =>	228
            ],
            [
                'id' => 219,
                'name' => 'Tokelau',
                'code' => 'TK',
                'code_phone' =>	690
            ],
            [
                'id' => 220,
                'name' => 'Tonga',
                'code' => 'TO',
                'code_phone' =>	676
            ],
            [
                'id' => 221,
                'name' => 'Trinidad And Tobago',
                'code' => 'TT',
                'code_phone' =>	1868
            ],
            [
                'id' => 222,
                'name' => 'Tunisia',
                'code' => 'TN',
                'code_phone' =>	216
            ],
            [
                'id' => 223,
                'name' => 'Turkey',
                'code' => 'TR',
                'code_phone' =>	90
            ],
            [
                'id' => 224,
                'name' => 'Turkmenistan',
                'code' => 'TM',
                'code_phone' =>	7370
            ],
            [
                'id' => 225,
                'name' => 'Turks And Caicos Islands',
                'code' => 'TC',
                'code_phone' =>	1649
            ],
            [
                'id' => 226,
                'name' => 'Tuvalu',
                'code' => 'TV',
                'code_phone' =>	688
            ],
            [
                'id' => 227,
                'name' => 'Uganda',
                'code' => 'UG',
                'code_phone' =>	256
            ],
            [
                'id' => 228,
                'name' => 'Ukraine',
                'code' => 'UA',
                'code_phone' =>	380
            ],
            [
                'id' => 229,
                'name' => 'United Arab Emirates',
                'code' => 'AE',
                'code_phone' =>	971
            ],
            [
                'id' => 230,
                'name' => 'United Kingdom',
                'code' => 'GB',
                'code_phone' =>	44
            ],
            [
                'id' => 231,
                'name' => 'United States',
                'code' => 'US',
                'code_phone' =>	1
            ],
            [
                'id' => 232,
                'name' => 'United States Minor Outlying Islands',
                'code' => 'UM',
                'code_phone' =>	1
            ],
            [
                'id' => 233,
                'name' => 'Uruguay',
                'code' => 'UY',
                'code_phone' =>	598
            ],
            [
                'id' => 234,
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'code_phone' =>	998
            ],
            [
                'id' => 235,
                'name' => 'Vanuatu',
                'code' => 'VU',
                'code_phone' =>	678
            ],
            [
                'id' => 236,
                'name' => 'Vatican City State (Holy See)',
                'code' => 'VA',
                'code_phone' =>	39
            ],
            [
                'id' => 237,
                'name' => 'Venezuela',
                'code' => 'VE',
                'code_phone' =>	58
            ],
            [
                'id' => 238,
                'name' => 'Vietnam',
                'code' => 'VN',
                'code_phone' =>	84
            ],
            [
                'id' => 239,
                'name' => 'Virgin Islands (British)',
                'code' => 'VG',
                'code_phone' =>	1284
            ],
            [
                'id' => 240,
                'name' => 'Virgin Islands (US)',
                'code' => 'VI',
                'code_phone' =>	1340
            ],
            [
                'id' => 241,
                'name' => 'Wallis And Futuna Islands',
                'code' => 'WF',
                'code_phone' =>	681
            ],
            [
                'id' => 242,
                'name' => 'Western Sahara',
                'code' => 'EH',
                'code_phone' =>	212
            ],
            [
                'id' => 243,
                'name' => 'Yemen',
                'code' => 'YE',
                'code_phone' =>	967
            ],
            [
                'id' => 244,
                'name' => 'Yugoslavia',
                'code' => 'YU',
                'code_phone' =>	38
            ],
            [
                'id' => 245,
                'name' => 'Zambia',
                'code' => 'ZM',
                'code_phone' =>	260
            ],
            [
                'id' => 246,
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'code_phone' =>	263
            ],


        ];
        foreach ($countries as $country) {
           Country::create($country);
        }
    }
}

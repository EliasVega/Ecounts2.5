<?php


namespace  Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoCountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('co_countries')->delete();

        \DB::table('co_countries')->insert(array (
            0 =>
            array (
                'id' =>	1,
                'name' => 'Afghanistan',
                'code' => 'AF',
                'code_phone' => 93
            ),
            1 =>
            array (
                'id' =>	2,
                'name' => 'Albania',
                'code' => 'AL',
                'code_phone' => 355
            ),
            2 =>
            array (
                'id' =>	3,
                'name' => 'Algeria',
                'code' => 'DZ',
                'code_phone' => 213
            ),
            3 =>
            array (
                'id' =>	4,
                'name' => 'American Samoa',
                'code' => 'AS',
                'code_phone' => 1684
            ),
            4 =>
            array (
                'id' =>	5,
                'name' => 'Andorra',
                'code' => 'AD',
                'code_phone' => 376
            ),
            5 =>
            array (
                'id' =>	6,
                'name' => 'Angola',
                'code' => 'AO',
                'code_phone' => 244
            ),
            6 =>
            array (
                'id' =>	7,
                'name' => 'Anguilla',
                'code' => 'AI',
                'code_phone' => 1264
            ),
            7 =>
            array (
                'id' =>	8,
                'name' => 'Antarctica',
                'code' => 'AQ',
                'code_phone' => 0
            ),
            8 =>
            array (
                'id' =>	9,
                'name' => 'Antigua And Barbuda',
                'code' => 'AG',
                'code_phone' => 1268
            ),
            9 =>
            array (
                'id' =>	10,
                'name' => 'Argentina',
                'code' => 'AR',
                'code_phone' => 54
            ),
            10	=>
            array (
                'id' =>	11,
                'name' => 'Armenia',
                'code' => 'AM',
                'code_phone' => 374
            ),
            11	=>
            array (
                'id' =>	12,
                'name' => 'Aruba',
                'code' => 'AW',
                'code_phone' => 297
            ),
            12	=>
            array (
                'id' =>	13,
                'name' => 'Australia',
                'code' => 'AU',
                'code_phone' => 61
            ),
            13	=>
            array (
                'id' =>	14,
                'name' => 'Austria',
                'code' => 'AT',
                'code_phone' => 43
            ),
            14	=>
            array (
                'id' =>	15,
                'name' => 'Azerbaijan',
                'code' => 'AZ',
                'code_phone' => 994
            ),
            15	=>
            array (
                'id' =>	16,
                'name' => 'Bahamas The',
                'code' => 'BS',
                'code_phone' => 1242
            ),
            16	=>
            array (
                'id' =>	17,
                'name' => 'Bahrain',
                'code' => 'BH',
                'code_phone' => 973
            ),
            17	=>
            array (
                'id' =>	18,
                'name' => 'Bangladesh',
                'code' => 'BD',
                'code_phone' => 880
            ),
            18	=>
            array (
                'id' =>	19,
                'name' => 'Barbados',
                'code' => 'BB',
                'code_phone' => 1246
            ),
            19	=>
            array (
                'id' =>	20,
                'name' => 'Belarus',
                'code' => 'BY',
                'code_phone' => 375
            ),
            20	=>
            array (
                'id' =>	21,
                'name' => 'Belgium',
                'code' => 'BE',
                'code_phone' => 32
            ),
            21	=>
            array (
                'id' =>	22,
                'name' => 'Belize',
                'code' => 'BZ',
                'code_phone' => 501
            ),
            22	=>
            array (
                'id' =>	23,
                'name' => 'Benin',
                'code' => 'BJ',
                'code_phone' => 229
            ),
            23	=>
            array (
                'id' =>	24,
                'name' => 'Bermuda',
                'code' => 'BM',
                'code_phone' => 1441
            ),
            24	=>
            array (
                'id' =>	25,
                'name' => 'Bhutan',
                'code' => 'BT',
                'code_phone' => 975
            ),
            25	=>
            array (
                'id' =>	26,
                'name' => 'Bolivia',
                'code' => 'BO',
                'code_phone' => 591
            ),
            26	=>
            array (
                'id' =>	27,
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'code_phone' => 387
            ),
            27	=>
            array (
                'id' =>	28,
                'name' => 'Botswana',
                'code' => 'BW',
                'code_phone' => 267
            ),
            28	=>
            array (
                'id' =>	29,
                'name' => 'Bouvet Island',
                'code' => 'BV',
                'code_phone' => 0
            ),
            29	=>
            array (
                'id' =>	30,
                'name' => 'Brazil',
                'code' => 'BR',
                'code_phone' => 55
            ),
            30	=>
            array (
                'id' =>	31,
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO',
                'code_phone' => 246
            ),
            31	=>
            array (
                'id' =>	32,
                'name' => 'Brunei',
                'code' => 'BN',
                'code_phone' => 673
            ),
            32	=>
            array (
                'id' =>	33,
                'name' => 'Bulgaria',
                'code' => 'BG',
                'code_phone' => 359
            ),
            33	=>
            array (
                'id' =>	34,
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'code_phone' => 226
            ),
            34	=>
            array (
                'id' =>	35,
                'name' => 'Burundi',
                'code' => 'BI',
                'code_phone' => 257
            ),
            35	=>
            array (
                'id' =>	36,
                'name' => 'Cambodia',
                'code' => 'KH',
                'code_phone' => 855
            ),
            36	=>
            array (
                'id' =>	37,
                'name' => 'Cameroon',
                'code' => 'CM',
                'code_phone' => 237
            ),
            37	=>
            array (
                'id' =>	38,
                'name' => 'Canada',
                'code' => 'CA',
                'code_phone' => 1
            ),
            38	=>
            array (
                'id' =>	39,
                'name' => 'Cape Verde',
                'code' => 'CV',
                'code_phone' => 238
            ),
            39	=>
            array (
                'id' =>	40,
                'name' => 'Cayman Islands',
                'code' => 'KY',
                'code_phone' => 1345
            ),
            40	=>
            array (
                'id' =>	41,
                'name' => 'Central African Republic',
                'code' => 'CF',
                'code_phone' => 236
            ),
            41	=>
            array (
                'id' =>	42,
                'name' => 'Chad',
                'code' => 'TD',
                'code_phone' => 235
            ),
            42	=>
            array (
                'id' =>	43,
                'name' => 'Chile',
                'code' => 'CL',
                'code_phone' => 56
            ),
            43	=>
            array (
                'id' =>	44,
                'name' => 'China',
                'code' => 'CN',
                'code_phone' => 86
            ),
            44	=>
            array (
                'id' =>	45,
                'name' => 'Christmas Island',
                'code' => 'CX',
                'code_phone' => 61
            ),
            45	=>
            array (
                'id' =>	46,
                'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
                'code_phone' => 672
            ),
            46	=>
            array (
                'id' =>	47,
                'name' => 'Colombia',
                'code' => 'CO',
                'code_phone' => 57
            ),
            47	=>
            array (
                'id' =>	48,
                'name' => 'Comoros',
                'code' => 'KM',
                'code_phone' => 269
            ),
            48	=>
            array (
                'id' =>	49,
                'name' => 'Republic Of The Congo',
                'code' => 'CG',
                'code_phone' => 242
            ),
            49	=>
            array (
                'id' =>	50,
                'name' => 'Democratic Republic Of The Congo',
                'code' => 'CD',
                'code_phone' => 242
            ),
            50	=>
            array (
                'id' =>	51,
                'name' => 'Cook Islands',
                'code' => 'CK',
                'code_phone' => 682
            ),
            51	=>
            array (
                'id' =>	52,
                'name' => 'Costa Rica',
                'code' => 'CR',
                'code_phone' => 506
            ),
            52	=>
            array (
                'id' =>	53,
                'name' => 'Cote D\'Ivoire (Ivory Coast)',
                'code' => 'CI',
                'code_phone' => 225
            ),
            53	=>
            array (
                'id' =>	54,
                'name' => 'Croatia (Hrvatska)',
                'code' => 'HR',
                'code_phone' => 385
            ),
            54	=>
            array (
                'id' =>	55,
                'name' => 'Cuba',
                'code' => 'CU',
                'code_phone' => 53
            ),
            55	=>
            array (
                'id' =>	56,
                'name' => 'Cyprus',
                'code' => 'CY',
                'code_phone' => 357
            ),
            56	=>
            array (
                'id' =>	57,
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'code_phone' => 420
            ),
            57	=>
            array (
                'id' =>	58,
                'name' => 'Denmark',
                'code' => 'DK',
                'code_phone' => 45
            ),
            58	=>
            array (
                'id' =>	59,
                'name' => 'Djibouti',
                'code' => 'DJ',
                'code_phone' => 253
            ),
            59	=>
            array (
                'id' =>	60,
                'name' => 'Dominica',
                'code' => 'DM',
                'code_phone' => 1767
            ),
            60	=>
            array (
                'id' =>	61,
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'code_phone' => 1809
            ),
            61	=>
            array (
                'id' =>	62,
                'name' => 'East Timor',
                'code' => 'TP',
                'code_phone' => 670
            ),
            62	=>
            array (
                'id' =>	63,
                'name' => 'Ecuador',
                'code' => 'EC',
                'code_phone' => 593
            ),
            63	=>
            array (
                'id' =>	64,
                'name' => 'Egypt',
                'code' => 'EG',
                'code_phone' => 20
            ),
            64	=>
            array (
                'id' =>	65,
                'name' => 'El Salvador',
                'code' => 'SV',
                'code_phone' => 503
            ),
            65	=>
            array (
                'id' =>	66,
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'code_phone' => 240
            ),
            66	=>
            array (
                'id' =>	67,
                'name' => 'Eritrea',
                'code' => 'ER',
                'code_phone' => 291
            ),
            67	=>
            array (
                'id' =>	68,
                'name' => 'Estonia',
                'code' => 'EE',
                'code_phone' => 372
            ),
            68	=>
            array (
                'id' =>	69,
                'name' => 'Ethiopia',
                'code' => 'ET',
                'code_phone' => 251
            ),
            69	=>
            array (
                'id' =>	70,
                'name' => 'External Territories of Australia',
                'code' => 'XA',
                'code_phone' => 61
            ),
            70	=>
            array (
                'id' =>	71,
                'name' => 'Falkland Islands',
                'code' => 'FK',
                'code_phone' => 500
            ),
            71	=>
            array (
                'id' =>	72,
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'code_phone' => 298
            ),
            72	=>
            array (
                'id' =>	73,
                'name' => 'Fiji Islands',
                'code' => 'FJ',
                'code_phone' => 679
            ),
            73	=>
            array (
                'id' =>	74,
                'name' => 'Finland',
                'code' => 'FI',
                'code_phone' => 358
            ),
            74	=>
            array (
                'id' =>	75,
                'name' => 'France',
                'code' => 'FR',
                'code_phone' => 33
            ),
            75	=>
            array (
                'id' =>	76,
                'name' => 'French Guiana',
                'code' => 'GF',
                'code_phone' => 594
            ),
            76	=>
            array (
                'id' =>	77,
                'name' => 'French Polynesia',
                'code' => 'PF',
                'code_phone' => 689
            ),
            77	=>
            array (
                'id' =>	78,
                'name' => 'French Southern Territories',
                'code' => 'TF',
                'code_phone' => 0
            ),
            78	=>
            array (
                'id' =>	79,
                'name' => 'Gabon',
                'code' => 'GA',
                'code_phone' => 241
            ),
            79	=>
            array (
                'id' =>	80,
                'name' => 'Gambia The',
                'code' => 'GM',
                'code_phone' => 220
            ),
            80	=>
            array (
                'id' =>	81,
                'name' => 'Georgia',
                'code' => 'GE',
                'code_phone' => 995
            ),
            81	=>
            array (
                'id' =>	82,
                'name' => 'Germany',
                'code' => 'DE',
                'code_phone' => 49
            ),
            82	=>
            array (
                'id' =>	83,
                'name' => 'Ghana',
                'code' => 'GH',
                'code_phone' => 233
            ),
            83	=>
            array (
                'id' =>	84,
                'name' => 'Gibraltar',
                'code' => 'GI',
                'code_phone' => 350
            ),
            84	=>
            array (
                'id' =>	85,
                'name' => 'Greece',
                'code' => 'GR',
                'code_phone' => 30
            ),
            85	=>
            array (
                'id' =>	86,
                'name' => 'Greenland',
                'code' => 'GL',
                'code_phone' => 299
            ),
            86	=>
            array (
                'id' =>	87,
                'name' => 'Grenada',
                'code' => 'GD',
                'code_phone' => 1473
            ),
            87	=>
            array (
                'id' =>	88,
                'name' => 'Guadeloupe',
                'code' => 'GP',
                'code_phone' => 590
            ),
            88	=>
            array (
                'id' =>	89,
                'name' => 'Guam',
                'code' => 'GU',
                'code_phone' => 1671
            ),
            89	=>
            array (
                'id' =>	90,
                'name' => 'Guatemala',
                'code' => 'GT',
                'code_phone' => 502
            ),
            90	=>
            array (
                'id' =>	91,
                'name' => 'Guernsey and Alderney',
                'code' => 'XU',
                'code_phone' => 44
            ),
            91	=>
            array (
                'id' =>	92,
                'name' => 'Guinea',
                'code' => 'GN',
                'code_phone' => 224
            ),
            92	=>
            array (
                'id' =>	93,
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
                'code_phone' => 245
            ),
            93	=>
            array (
                'id' =>	94,
                'name' => 'Guyana',
                'code' => 'GY',
                'code_phone' => 592
            ),
            94	=>
            array (
                'id' =>	95,
                'name' => 'Haiti',
                'code' => 'HT',
                'code_phone' => 509
            ),
            95	=>
            array (
                'id' =>	96,
                'name' => 'Heard and McDonald Islands',
                'code' => 'HM',
                'code_phone' => 0
            ),
            96	=>
            array (
                'id' =>	97,
                'name' => 'Honduras',
                'code' => 'HN',
                'code_phone' => 504
            ),
            97	=>
            array (
                'id' =>	98,
                'name' => 'Hong Kong S.A.R.',
                'code' => 'HK',
                'code_phone' => 852
            ),
            98	=>
            array (
                'id' =>	99,
                'name' => 'Hungary',
                'code' => 'HU',
                'code_phone' => 36
            ),
            99	=>
            array (
                'id' =>	100,
                'name' => 'Iceland',
                'code' => 'IS',
                'code_phone' => 354
            ),
            100	=>
            array (
                'id' =>	101,
                'name' => 'India',
                'code' => 'IN',
                'code_phone' => 91
            ),
            101	=>
            array (
                'id' =>	102,
                'name' => 'Indonesia',
                'code' => 'ID',
                'code_phone' => 62
            ),
            102	=>
            array (
                'id' =>	103,
                'name' => 'Iran',
                'code' => 'IR',
                'code_phone' => 98
            ),
            103	=>
            array (
                'id' =>	104,
                'name' => 'Iraq',
                'code' => 'IQ',
                'code_phone' => 964
            ),
            104	=>
            array (
                'id' =>	105,
                'name' => 'Ireland',
                'code' => 'IE',
                'code_phone' => 353
            ),
            105	=>
            array (
                'id' =>	106,
                'name' => 'Israel',
                'code' => 'IL',
                'code_phone' => 972
            ),
            106	=>
            array (
                'id' =>	107,
                'name' => 'Italy',
                'code' => 'IT',
                'code_phone' => 39
            ),
            107	=>
            array (
                'id' =>	108,
                'name' => 'Jamaica',
                'code' => 'JM',
                'code_phone' => 1876
            ),
            108	=>
            array (
                'id' =>	109,
                'name' => 'Japan',
                'code' => 'JP',
                'code_phone' => 81
            ),
            109	=>
            array (
                'id' =>	110,
                'name' => 'Jersey',
                'code' => 'XJ',
                'code_phone' => 44
            ),
            110	=>
            array (
                'id' =>	111,
                'name' => 'Jordan',
                'code' => 'JO',
                'code_phone' => 962
            ),
            111	=>
            array (
                'id' =>	112,
                'name' => 'Kazakhstan',
                'code' => 'KZ',
                'code_phone' => 7
            ),
            112	=>
            array (
                'id' =>	113,
                'name' => 'Kenya',
                'code' => 'KE',
                'code_phone' => 254
            ),
            113	=>
            array (
                'id' =>	114,
                'name' => 'Kiribati',
                'code' => 'KI',
                'code_phone' => 686
            ),
            114	=>
            array (
                'id' =>	115,
                'name' => 'Korea North',
                'code' => 'KP',
                'code_phone' => 850
            ),
            115	=>
            array (
                'id' =>	116,
                'name' => 'Korea South',
                'code' => 'KR',
                'code_phone' => 82
            ),
            116	=>
            array (
                'id' =>	117,
                'name' => 'Kuwait',
                'code' => 'KW',
                'code_phone' => 965
            ),
            117	=>
            array (
                'id' =>	118,
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
                'code_phone' => 996
            ),
            118	=>
            array (
                'id' =>	119,
                'name' => 'Laos',
                'code' => 'LA',
                'code_phone' => 856
            ),
            119	=>
            array (
                'id' =>	120,
                'name' => 'Latvia',
                'code' => 'LV',
                'code_phone' => 371
            ),
            120	=>
            array (
                'id' =>	121,
                'name' => 'Lebanon',
                'code' => 'LB',
                'code_phone' => 961
            ),
            121	=>
            array (
                'id' =>	122,
                'name' => 'Lesotho',
                'code' => 'LS',
                'code_phone' => 266
            ),
            122	=>
            array (
                'id' =>	123,
                'name' => 'Liberia',
                'code' => 'LR',
                'code_phone' => 231
            ),
            123	=>
            array (
                'id' =>	124,
                'name' => 'Libya',
                'code' => 'LY',
                'code_phone' => 218
            ),
            124	=>
            array (
                'id' =>	125,
                'name' => 'Liechtenstein',
                'code' => 'LI',
                'code_phone' => 423
            ),
            125	=>
            array (
                'id' =>	126,
                'name' => 'Lithuania',
                'code' => 'LT',
                'code_phone' => 370
            ),
            126	=>
            array (
                'id' =>	127,
                'name' => 'Luxembourg',
                'code' => 'LU',
                'code_phone' => 352
            ),
            127	=>
            array (
                'id' =>	128,
                'name' => 'Macau S.A.R.',
                'code' => 'MO',
                'code_phone' => 853
            ),
            128	=>
            array (
                'id' =>	129,
                'name' => 'Macedonia',
                'code' => 'MK',
                'code_phone' => 389
            ),
            129	=>
            array (
                'id' =>	130,
                'name' => 'Madagascar',
                'code' => 'MG',
                'code_phone' => 261
            ),
            130	=>
            array (
                'id' =>	131,
                'name' => 'Malawi',
                'code' => 'MW',
                'code_phone' => 265
            ),
            131	=>
            array (
                'id' =>	132,
                'name' => 'Malaysia',
                'code' => 'MY',
                'code_phone' => 60
            ),
            132	=>
            array (
                'id' =>	133,
                'name' => 'Maldives',
                'code' => 'MV',
                'code_phone' => 960
            ),
            133	=>
            array (
                'id' =>	134,
                'name' => 'Mali',
                'code' => 'ML',
                'code_phone' => 223
            ),
            134	=>
            array (
                'id' =>	135,
                'name' => 'Malta',
                'code' => 'MT',
                'code_phone' => 356
            ),
            135	=>
            array (
                'id' =>	136,
                'name' => 'Man (Isle of)',
                'code' => 'XM',
                'code_phone' => 44
            ),
            136	=>
            array (
                'id' =>	137,
                'name' => 'Marshall Islands',
                'code' => 'MH',
                'code_phone' => 692
            ),
            137	=>
            array (
                'id' =>	138,
                'name' => 'Martinique',
                'code' => 'MQ',
                'code_phone' => 596
            ),
            138	=>
            array (
                'id' =>	139,
                'name' => 'Mauritania',
                'code' => 'MR',
                'code_phone' => 222
            ),
            139	=>
            array (
                'id' =>	140,
                'name' => 'Mauritius',
                'code' => 'MU',
                'code_phone' => 230
            ),
            140	=>
            array (
                'id' =>	141,
                'name' => 'Mayotte',
                'code' => 'YT',
                'code_phone' => 269
            ),
            141	=>
            array (
                'id' =>	142,
                'name' => 'Mexico',
                'code' => 'MX',
                'code_phone' => 52
            ),
            142	=>
            array (
                'id' =>	143,
                'name' => 'Micronesia',
                'code' => 'FM',
                'code_phone' => 691
            ),
            143	=>
            array (
                'id' =>	144,
                'name' => 'Moldova',
                'code' => 'MD',
                'code_phone' => 373
            ),
            144	=>
            array (
                'id' =>	145,
                'name' => 'Monaco',
                'code' => 'MC',
                'code_phone' => 377
            ),
            145	=>
            array (
                'id' =>	146,
                'name' => 'Mongolia',
                'code' => 'MN',
                'code_phone' => 976
            ),
            146	=>
            array (
                'id' =>	147,
                'name' => 'Montserrat',
                'code' => 'MS',
                'code_phone' => 1664
            ),
            147	=>
            array (
                'id' =>	148,
                'name' => 'Morocco',
                'code' => 'MA',
                'code_phone' => 212
            ),
            148	=>
            array (
                'id' =>	149,
                'name' => 'Mozambique',
                'code' => 'MZ',
                'code_phone' => 258
            ),
            149	=>
            array (
                'id' =>	150,
                'name' => 'Myanmar',
                'code' => 'MM',
                'code_phone' => 95
            ),
            150	=>
            array (
                'id' =>	151,
                'name' => 'Namibia',
                'code' => 'NA',
                'code_phone' => 264
            ),
            151	=>
            array (
                'id' =>	152,
                'name' => 'Nauru',
                'code' => 'NR',
                'code_phone' => 674
            ),
            152	=>
            array (
                'id' =>	153,
                'name' => 'Nepal',
                'code' => 'NP',
                'code_phone' => 977
            ),
            153	=>
            array (
                'id' =>	154,
                'name' => 'Netherlands Antilles',
                'code' => 'AN',
                'code_phone' => 599
            ),
            154	=>
            array (
                'id' =>	155,
                'name' => 'Netherlands The',
                'code' => 'NL',
                'code_phone' => 31
            ),
            155	=>
            array (
                'id' =>	156,
                'name' => 'New Caledonia',
                'code' => 'NC',
                'code_phone' => 687
            ),
            156	=>
            array (
                'id' =>	157,
                'name' => 'New Zealand',
                'code' => 'NZ',
                'code_phone' => 64
            ),
            157	=>
            array (
                'id' =>	158,
                'name' => 'Nicaragua',
                'code' => 'NI',
                'code_phone' => 505
            ),
            158	=>
            array (
                'id' =>	159,
                'name' => 'Niger',
                'code' => 'NE',
                'code_phone' => 227
            ),
            159	=>
            array (
                'id' =>	160,
                'name' => 'Nigeria',
                'code' => 'NG',
                'code_phone' => 234
            ),
            160	=>
            array (
                'id' =>	161,
                'name' => 'Niue',
                'code' => 'NU',
                'code_phone' => 683
            ),
            161	=>
            array (
                'id' =>	162,
                'name' => 'Norfolk Island',
                'code' => 'NF',
                'code_phone' => 672
            ),
            162	=>
            array (
                'id' =>	163,
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'code_phone' => 1670
            ),
            163	=>
            array (
                'id' =>	164,
                'name' => 'Norway',
                'code' => 'NO',
                'code_phone' => 47
            ),
            164	=>
            array (
                'id' =>	165,
                'name' => 'Oman',
                'code' => 'OM',
                'code_phone' => 968
            ),
            165	=>
            array (
                'id' =>	166,
                'name' => 'Pakistan',
                'code' => 'PK',
                'code_phone' => 92
            ),
            166	=>
            array (
                'id' =>	167,
                'name' => 'Palau',
                'code' => 'PW',
                'code_phone' => 680
            ),
            167	=>
            array (
                'id' =>	168,
                'name' => 'Palestinian Territory Occupied',
                'code' => 'PS',
                'code_phone' => 970
            ),
            168	=>
            array (
                'id' =>	169,
                'name' => 'Panama',
                'code' => 'PA',
                'code_phone' => 507
            ),
            169	=>
            array (
                'id' =>	170,
                'name' => 'Papua new Guinea',
                'code' => 'PG',
                'code_phone' => 675
            ),
            170	=>
            array (
                'id' =>	171,
                'name' => 'Paraguay',
                'code' => 'PY',
                'code_phone' => 595
            ),
            171	=>
            array (
                'id' =>	172,
                'name' => 'Peru',
                'code' => 'PE',
                'code_phone' => 51
            ),
            172	=>
            array (
                'id' =>	173,
                'name' => 'Philippines',
                'code' => 'PH',
                'code_phone' => 63
            ),
            173	=>
            array (
                'id' =>	174,
                'name' => 'Pitcairn Island',
                'code' => 'PN',
                'code_phone' => 0
            ),
            174	=>
            array (
                'id' =>	175,
                'name' => 'Poland',
                'code' => 'PL',
                'code_phone' => 48
            ),
            175	=>
            array (
                'id' =>	176,
                'name' => 'Portugal',
                'code' => 'PT',
                'code_phone' => 351
            ),
            176	=>
            array (
                'id' =>	177,
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'code_phone' => 1787
            ),
            177	=>
            array (
                'id' =>	178,
                'name' => 'Qatar',
                'code' => 'QA',
                'code_phone' => 974
            ),
            178	=>
            array (
                'id' =>	179,
                'name' => 'Reunion',
                'code' => 'RE',
                'code_phone' => 262
            ),
            179	=>
            array (
                'id' =>	180,
                'name' => 'Romania',
                'code' => 'RO',
                'code_phone' => 40
            ),
            180	=>
            array (
                'id' =>	181,
                'name' => 'Russia',
                'code' => 'RU',
                'code_phone' => 70
            ),
            181	=>
            array (
                'id' =>	182,
                'name' => 'Rwanda',
                'code' => 'RW',
                'code_phone' => 250
            ),
            182	=>
            array (
                'id' =>	183,
                'name' => 'Saint Helena',
                'code' => 'SH',
                'code_phone' => 290
            ),
            183	=>
            array (
                'id' =>	184,
                'name' => 'Saint Kitts And Nevis',
                'code' => 'KN',
                'code_phone' => 1869
            ),
            184	=>
            array (
                'id' =>	185,
                'name' => 'Saint Lucia',
                'code' => 'LC',
                'code_phone' => 1758
            ),
            185	=>
            array (
                'id' =>	186,
                'name' => 'Saint Pierre and Miquelon',
                'code' => 'PM',
                'code_phone' => 508
            ),
            186	=>
            array (
                'id' =>	187,
                'name' => 'Saint Vincent And The Grenadines',
                'code' => 'VC',
                'code_phone' => 1784
            ),
            187	=>
            array (
                'id' =>	188,
                'name' => 'Samoa',
                'code' => 'WS',
                'code_phone' => 684
            ),
            188	=>
            array (
                'id' =>	189,
                'name' => 'San Marino',
                'code' => 'SM',
                'code_phone' => 378
            ),
            189	=>
            array (
                'id' =>	190,
                'name' => 'Sao Tome and Principe',
                'code' => 'ST',
                'code_phone' => 239
            ),
            190	=>
            array (
                'id' =>	191,
                'name' => 'Saudi Arabia',
                'code' => 'SA',
                'code_phone' => 966
            ),
            191	=>
            array (
                'id' =>	192,
                'name' => 'Senegal',
                'code' => 'SN',
                'code_phone' => 221
            ),
            192	=>
            array (
                'id' =>	193,
                'name' => 'Serbia',
                'code' => 'RS',
                'code_phone' => 381
            ),
            193	=>
            array (
                'id' =>	194,
                'name' => 'Seychelles',
                'code' => 'SC',
                'code_phone' => 248
            ),
            194	=>
            array (
                'id' =>	195,
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'code_phone' => 232
            ),
            195	=>
            array (
                'id' =>	196,
                'name' => 'Singapore',
                'code' => 'SG',
                'code_phone' => 65
            ),
            196	=>
            array (
                'id' =>	197,
                'name' => 'Slovakia',
                'code' => 'SK',
                'code_phone' => 421
            ),
            197	=>
            array (
                'id' =>	198,
                'name' => 'Slovenia',
                'code' => 'SI',
                'code_phone' => 386
            ),
            198	=>
            array (
                'id' =>	199,
                'name' => 'Smaller Territories of the UK',
                'code' => 'XG',
                'code_phone' => 44
            ),
            199	=>
            array (
                'id' =>	200,
                'name' => 'Solomon Islands',
                'code' => 'SB',
                'code_phone' => 677
            ),
            200	=>
            array (
                'id' =>	201,
                'name' => 'Somalia',
                'code' => 'SO',
                'code_phone' => 252
            ),
            201	=>
            array (
                'id' =>	202,
                'name' => 'South Africa',
                'code' => 'ZA',
                'code_phone' => 27
            ),
            202	=>
            array (
                'id' =>	203,
                'name' => 'South Georgia',
                'code' => 'GS',
                'code_phone' => 0
            ),
            203	=>
            array (
                'id' =>	204,
                'name' => 'South Sudan',
                'code' => 'SS',
                'code_phone' => 211
            ),
            204	=>
            array (
                'id' =>	205,
                'name' => 'Spain',
                'code' => 'ES',
                'code_phone' => 34
            ),
            205	=>
            array (
                'id' =>	206,
                'name' => 'Sri Lanka',
                'code' => 'LK',
                'code_phone' => 94
            ),
            206	=>
            array (
                'id' =>	207,
                'name' => 'Sudan',
                'code' => 'SD',
                'code_phone' => 249
            ),
            207	=>
            array (
                'id' =>	208,
                'name' => 'Suriname',
                'code' => 'SR',
                'code_phone' => 597
            ),
            208	=>
            array (
                'id' =>	209,
                'name' => 'Svalbard And Jan Mayen Islands',
                'code' => 'SJ',
                'code_phone' => 47
            ),
            209	=>
            array (
                'id' =>	210,
                'name' => 'Swaziland',
                'code' => 'SZ',
                'code_phone' => 268
            ),
            210	=>
            array (
                'id' =>	211,
                'name' => 'Sweden',
                'code' => 'SE',
                'code_phone' => 46
            ),
            211	=>
            array (
                'id' =>	212,
                'name' => 'Switzerland',
                'code' => 'CH',
                'code_phone' => 41
            ),
            212	=>
            array (
                'id' =>	213,
                'name' => 'Syria',
                'code' => 'SY',
                'code_phone' => 963
            ),
            213	=>
            array (
                'id' =>	214,
                'name' => 'Taiwan',
                'code' => 'TW',
                'code_phone' => 886
            ),
            214	=>
            array (
                'id' =>	215,
                'name' => 'Tajikistan',
                'code' => 'TJ',
                'code_phone' => 992
            ),
            215	=>
            array (
                'id' =>	216,
                'name' => 'Tanzania',
                'code' => 'TZ',
                'code_phone' => 255
            ),
            216	=>
            array (
                'id' =>	217,
                'name' => 'Thailand',
                'code' => 'TH',
                'code_phone' => 66
            ),
            217	=>
            array (
                'id' =>	218,
                'name' => 'Togo',
                'code' => 'TG',
                'code_phone' => 228
            ),
            218	=>
            array (
                'id' =>	219,
                'name' => 'Tokelau',
                'code' => 'TK',
                'code_phone' => 690
            ),
            219	=>
            array (
                'id' =>	220,
                'name' => 'Tonga',
                'code' => 'TO',
                'code_phone' => 676
            ),
            220	=>
            array (
                'id' =>	221,
                'name' => 'Trinidad And Tobago',
                'code' => 'TT',
                'code_phone' => 1868
            ),
            221	=>
            array (
                'id' =>	222,
                'name' => 'Tunisia',
                'code' => 'TN',
                'code_phone' => 216
            ),
            222	=>
            array (
                'id' =>	223,
                'name' => 'Turkey',
                'code' => 'TR',
                'code_phone' => 90
            ),
            223	=>
            array (
                'id' =>	224,
                'name' => 'Turkmenistan',
                'code' => 'TM',
                'code_phone' => 7370
            ),
            224	=>
            array (
                'id' =>	225,
                'name' => 'Turks And Caicos Islands',
                'code' => 'TC',
                'code_phone' => 1649
            ),
            225	=>
            array (
                'id' =>	226,
                'name' => 'Tuvalu',
                'code' => 'TV',
                'code_phone' => 688
            ),
            226	=>
            array (
                'id' =>	227,
                'name' => 'Uganda',
                'code' => 'UG',
                'code_phone' => 256
            ),
            227	=>
            array (
                'id' =>	228,
                'name' => 'Ukraine',
                'code' => 'UA',
                'code_phone' => 380
            ),
            228	=>
            array (
                'id' =>	229,
                'name' => 'United Arab Emirates',
                'code' => 'AE',
                'code_phone' => 971
            ),
            229	=>
            array (
                'id' =>	230,
                'name' => 'United Kingdom',
                'code' => 'GB',
                'code_phone' => 44
            ),
            230	=>
            array (
                'id' =>	231,
                'name' => 'United States',
                'code' => 'US',
                'code_phone' => 1
            ),
            231	=>
            array (
                'id' =>	232,
                'name' => 'United States Minor Outlying Islands',
                'code' => 'UM',
                'code_phone' => 1
            ),
            232	=>
            array (
                'id' =>	233,
                'name' => 'Uruguay',
                'code' => 'UY',
                'code_phone' => 598
            ),
            233	=>
            array (
                'id' =>	234,
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'code_phone' => 998
            ),
            234	=>
            array (
                'id' =>	235,
                'name' => 'Vanuatu',
                'code' => 'VU',
                'code_phone' => 678
            ),
            235	=>
            array (
                'id' =>	236,
                'name' => 'Vatican City State (Holy See)',
                'code' => 'VA',
                'code_phone' => 39
            ),
            236	=>
            array (
                'id' =>	237,
                'name' => 'Venezuela',
                'code' => 'VE',
                'code_phone' => 58
            ),
            237	=>
            array (
                'id' =>	238,
                'name' => 'Vietnam',
                'code' => 'VN',
                'code_phone' => 84
            ),
            238	=>
            array (
                'id' =>	239,
                'name' => 'Virgin Islands (British)',
                'code' => 'VG',
                'code_phone' => 1284
            ),
            239	=>
            array (
                'id' =>	240,
                'name' => 'Virgin Islands (US)',
                'code' => 'VI',
                'code_phone' => 1340
            ),
            240	=>
            array (
                'id' =>	241,
                'name' => 'Wallis And Futuna Islands',
                'code' => 'WF',
                'code_phone' => 681
            ),
            241	=>
            array (
                'id' =>	242,
                'name' => 'Western Sahara',
                'code' => 'EH',
                'code_phone' => 212
            ),
            242	=>
            array (
                'id' =>	243,
                'name' => 'Yemen',
                'code' => 'YE',
                'code_phone' => 967
            ),
            243	=>
            array (
                'id' =>	244,
                'name' => 'Yugoslavia',
                'code' => 'YU',
                'code_phone' => 38
            ),
            244	=>
            array (
                'id' =>	245,
                'name' => 'Zambia',
                'code' => 'ZM',
                'code_phone' => 260
            ),
            245	=>
            array (
                'id' =>	246,
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'code_phone' => 263
            ),


        ));
    }
}

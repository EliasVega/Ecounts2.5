<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $municipalities = [
            [
                'name' => 'MEDELLIN',
                'code' => '05001',
                'department_id' => 1
            ],
            [
                'name' => 'ABEJORRAL',
                'code' => '05002',
                'department_id' => 1
            ],
            [
                'name' => 'ABRIAQUI',
                'code' => '05004',
                'department_id' => 1
            ],
            [
                'name' => 'ALEJANDRIA',
                'code' => '05021',
                'department_id' => 1
            ],
            [
                'name' => 'AMAGA',
                'code' => '05002',
                'department_id' => 1
            ],
            [
                'name' => 'AMALFI',
                'code' => '05031',
                'department_id' => 1
            ],
            [
                'name' => 'ANDES',
                'code' => '05034',
                'department_id' => 1
            ],
            [
                'name' => 'ANGELOPOLIS',
                'code' => '05036',
                'department_id' => 1
            ],
            [
                'name' => 'ANGOSTURA',
                'code' => '05038',
                'department_id' => 1
            ],
            [
                'name' => 'ANORI',
                'code' => '05040',
                'department_id' => 1
            ],
            [
                'name' => 'SANTAFE DE ANTIOQUIA',
                'code' => '05042',
                'department_id' => 1
            ],
            [
                'name' => 'ANZA',
                'code' => '05044',
                'department_id' => 1
            ],
            [
                'name' => 'APARTADO',
                'code' => '05045',
                'department_id' => 1
            ],
            [
                'name' => 'ARBOLETES',
                'code' => '05051',
                'department_id' => 1
            ],
            [
                'name' => 'ARGELIA',
                'code' => '05055',
                'department_id' => 1
            ],
            [
                'name' => 'ARMENIA',
                'code' => '05059',
                'department_id' => 1
            ],
            [
                'name' => 'BARBOSA',
                'code' => '05079',
                'department_id' => 1
            ],
            [
                'name' => 'BELMIRA',
                'code' => '05086',
                'department_id' => 1
            ],
            [
                'name' => 'BELLO',
                'code' => '05088',
                'department_id' => 1
            ],
            [
                'name' => 'BETANIA',
                'code' => '05091',
                'department_id' => 1
            ],
            [
                'name' => 'BETULIA',
                'code' => '05093',
                'department_id' => 1
            ],
            [
                'name' => 'CIUDAD BOLIVAR',
                'code' => '05101',
                'department_id' => 1
            ],
            [
                'name' => 'BRICEÑO',
                'code' => '05107',
                'department_id' => 1
            ],
            [
                'name' => 'BURITICA',
                'code' => '05113',
                'department_id' => 1
            ],
            [
                'name' => 'CACERES',
                'code' => '05120',
                'department_id' => 1
            ],
            [
                'name' => 'CAICEDO',
                'code' => '05125',
                'department_id' => 1
            ],
            [
                'name' => 'CALDAS',
                'code' => '05129',
                'department_id' => 1
            ],
            [
                'name' => 'CAMPAMENTO',
                'code' => '05134',
                'department_id' => 1
            ],
            [
                'name' => 'CAÑASGORDAS',
                'code' => '05138',
                'department_id' => 1
            ],
            [
                'name' => 'CARACOLI',
                'code' => '05142',
                'department_id' => 1
            ],
            [
                'name' => 'CARAMANTA',
                'code' => '05145',
                'department_id' => 1
            ],
            [
                'name' => 'CAREPA',
                'code' => '05147',
                'department_id' => 1
            ],
            [
                'name' => 'EL CARMEN DE VIVORAL',
                'code' => '05148',
                'department_id' => 1
            ],
            [
                'name' => 'CAROLINA',
                'code' => '05150',
                'department_id' => 1
            ],
            [
                'name' => 'CAUCASIA',
                'code' => '05154',
                'department_id' => 1
            ],
            [
                'name' => 'CHIGORODO',
                'code' => '05172',
                'department_id' => 1
            ],
            [
                'name' => 'CISNEROS',
                'code' => '05190',
                'department_id' => 1
            ],
            [
                'name' => 'COCORNA',
                'code' => '05197',
                'department_id' => 1
            ],
            [
                'name' => 'CONCEPCION',
                'code' => '05206',
                'department_id' => 1
            ],
            [
                'name' => 'CONCORDIA',
                'code' => '05209',
                'department_id' => 1
            ],
            [
                'name' => 'COPACABANA',
                'code' => '05212',
                'department_id' => 1
            ],
            [
                'name' => 'DABEIBA',
                'code' => '05234',
                'department_id' => 1
            ],
            [
                'name' => 'DON MATIAS',
                'code' => '05237',
                'department_id' => 1
            ],
            [
                'name' => 'ABEJICO',
                'code' => '05240',
                'department_id' => 1
            ],
            [
                'name' => 'EL BAGRE',
                'code' => '05250',
                'department_id' => 1
            ],
            [
                'name' => 'ENTRERRIOS',
                'code' => '05264',
                'department_id' => 1
            ],
            [
                'name' => 'ENVIGADO',
                'code' => '05266',
                'department_id' => 1
            ],
            [
                'name' => 'FREDONIA',
                'code' => '05282',
                'department_id' => 1
            ],
            [
                'name' => 'FRONTINO',
                'code' => '05284',
                'department_id' => 1
            ],
            [
                'name' => 'GIRALDO',
                'code' => '05306',
                'department_id' => 1
            ],
            [
                'name' => 'GIRARDOTA',
                'code' => '05308',
                'department_id' => 1
            ],
            [
                'name' => 'GOMEZ PLATA',
                'code' => '05310',
                'department_id' => 1
            ],
            [
                'name' => 'GRANADA',
                'code' => '05313',
                'department_id' => 1
            ],
            [
                'name' => 'GUADALUPE',
                'code' => '05315',
                'department_id' => 1
            ],
            [
                'name' => 'GUARNE',
                'code' => '05318',
                'department_id' => 1
            ],
            [
                'name' => 'GUATAPE',
                'code' => '05321',
                'department_id' => 1
            ],
            [
                'name' => 'HELICONDIA',
                'code' => '05347',
                'department_id' => 1
            ],
            [
                'name' => 'HISPANIA',
                'code' => '05353',
                'department_id' => 1
            ],
            [
                'name' => 'ITAGUI',
                'code' => '05360',
                'department_id' => 1
            ],
            [
                'name' => 'ITUANGO',
                'code' => '05361',
                'department_id' => 1
            ],
            [
                'name' => 'JARDIN',
                'code' => '05364',
                'department_id' => 1
            ],
            [
                'name' => 'JERICO',
                'code' => '05368',
                'department_id' => 1
            ],
            [
                'name' => 'LA CEJA',
                'code' => '05376',
                'department_id' => 1
            ],
            [
                'name' => 'LA ESTRELLA',
                'code' => '05380',
                'department_id' => 1
            ],
            [
                'name' => 'LA PINTADA',
                'code' => '05390',
                'department_id' => 1
            ],
            [
                'name' => 'LA UNION',
                'code' => '05400',
                'department_id' => 1
            ],
            [
                'name' => 'LIBORINA',
                'code' => '05411',
                'department_id' => 1
            ],
            [
                'name' => 'MACEO',
                'code' => '05425',
                'department_id' => 1
            ],
            [
                'name' => 'MARINILLA',
                'code' => '05440',
                'department_id' => 1
            ],
            [
                'name' => 'MONTEBELLO',
                'code' => '05467',
                'department_id' => 1
            ],
            [
                'name' => 'MURINDO',
                'code' => '05475',
                'department_id' => 1
            ],
            [
                'name' => 'MUTATA',
                'code' => '05480',
                'department_id' => 1
            ],
            [
                'name' => 'NARIÑO',
                'code' => '05483',
                'department_id' => 1
            ],
            [
                'name' => 'NECOCLI',
                'code' => '05490',
                'department_id' => 1
            ],
            [
                'name' => 'NECHI',
                'code' => '05495',
                'department_id' => 1
            ],
            [
                'name' => 'OLAYA',
                'code' => '05501',
                'department_id' => 1
            ],
            [
                'name' => 'PEÑOL',
                'code' => '05541',
                'department_id' => 1
            ],
            [
                'name' => 'PEQUE',
                'code' => '05543',
                'department_id' => 1
            ],
            [
                'name' => 'PUEBLORRICO',
                'code' => '05576',
                'department_id' => 1
            ],
            [
                'name' => 'PUERTO BERRIO',
                'code' => '05579',
                'department_id' => 1
            ],
            [
                'name' => 'PUERTO NARE',
                'code' => '05585',
                'department_id' => 1
            ],
            [
                'name' => 'PUERTO TRIUNFO',
                'code' => '05591',
                'department_id' => 1
            ],
            [
                'name' => 'REMEDIOS',
                'code' => '05604',
                'department_id' => 1
            ],
            [
                'name' => 'RETIRO',
                'code' => '05607',
                'department_id' => 1
            ],
            [
                'name' => 'RIONEGRO',
                'code' => '05615',
                'department_id' => 1
            ],
            [
                'name' => 'SABANALARGA',
                'code' => '05628',
                'department_id' => 1
            ],
            [
                'name' => 'SABANETA',
                'code' => '05631',
                'department_id' => 1
            ],
            [
                'name' => 'SALGAR',
                'code' => '05642',
                'department_id' => 1
            ],
            [
                'name' => 'SAN ANDRES DE CUERQUIA',
                'code' => '05647',
                'department_id' => 1
            ],
            [
                'name' => 'SAN CARLOS',
                'code' => '05649',
                'department_id' => 1
            ],
            [
                'name' => 'SAN FRANCISCO',
                'code' => '05652',
                'department_id' => 1
            ],
            [
                'name' => 'SAN JERONIMO',
                'code' => '05656',
                'department_id' => 1
            ],
            [
                'name' => 'SAN JOSE DE LA MONTAÑA',
                'code' => '05658',
                'department_id' => 1
            ],
            [
                'name' => 'SAN JUAN DE URABA',
                'code' => '05659',
                'department_id' => 1
            ],
            [
                'name' => 'SAN LUIS',
                'code' => '05660',
                'department_id' => 1
            ],
            [
                'name' => 'SAN PEDRO DE LOS MILAGROS',
                'code' => '05664',
                'department_id' => 1
            ],
            [
                'name' => 'SAN PEDRO DE URABA',
                'code' => '05665',
                'department_id' => 1
            ],
            [
                'name' => 'SAN RAFAEL',
                'code' => '05667',
                'department_id' => 1
            ],
            [
                'name' => 'SAN ROQUE',
                'code' => '05670',
                'department_id' => 1
            ],
            [
                'name' => 'SAN VICENTE FERRER',
                'code' => '05674',
                'department_id' => 1
            ],
            [
                'name' => 'SANTA BARBARA',
                'code' => '05679',
                'department_id' => 1
            ],
            [
                'name' => 'SANTA ROSA DE OSOS',
                'code' => '05686',
                'department_id' => 1
            ],
            [
                'name' => 'SANTO DOMINGO',
                'code' => '05690',
                'department_id' => 1
            ],
            [
                'name' => 'EL SANTUARIO',
                'code' => '05697',
                'department_id' => 1
            ],
            [
                'name' => 'SEGOVIA',
                'code' => '05736',
                'department_id' => 1
            ],
            [
                'name' => 'SONSON',
                'code' => '05756',
                'department_id' => 1
            ],
            [
                'name' => 'SOPETRAN',
                'code' => '05761',
                'department_id' => 1
            ],
            [
                'name' => 'TAMESIS',
                'code' => '05789',
                'department_id' => 1
            ],
            [
                'name' => 'TARAZA',
                'code' => '05790',
                'department_id' => 1
            ],
            [
                'name' => 'TARSO',
                'code' => '05792',
                'department_id' => 1
            ],
            [
                'name' => 'TITIRIBI',
                'code' => '05809',
                'department_id' => 1
            ],
            [
                'name' => 'TOLEDO',
                'code' => '05819',
                'department_id' => 1
            ],
            [
                'name' => 'TURBO',
                'code' => '05837',
                'department_id' => 1
            ],
            [
                'name' => 'URAMITA',
                'code' => '05842',
                'department_id' => 1
            ],
            [
                'name' => 'URRAO',
                'code' => '05847',
                'department_id' => 1
            ],
            [
                'name' => 'VALDIVIA',
                'code' => '05854',
                'department_id' => 1
            ],
            [
                'name' => 'VALPARAISO',
                'code' => '05856',
                'department_id' => 1
            ],
            [
                'name' => 'VEGACHI',
                'code' => '05858',
                'department_id' => 1
            ],
            [
                'name' => 'VENECIA',
                'code' => '05861',
                'department_id' => 1
            ],
            [
                'name' => 'VIGIA DEL FUERTE',
                'code' => '05873',
                'department_id' => 1
            ],
            [
                'name' => 'YALI',
                'code' => '05885',
                'department_id' => 1
            ],
            [
                'name' => 'YARUMAL',
                'code' => '05887',
                'department_id' => 1
            ],
            [
                'name' => 'YOLOMBO',
                'code' => '05890',
                'department_id' => 1
            ],
            [
                'name' => 'YONDO',
                'code' => '05893',
                'department_id' => 1
            ],
            [
                'name' => 'ZARAGOSA',
                'code' => '05895',
                'department_id' => 1
            ],
            [
                'name' => 'BARRANQUILLA',
                'code' => '08001',
                'department_id' => 2
            ],
            [
                'name' => 'BARANOA',
                'code' => '08078',
                'department_id' => 2
            ],
            [
                'name' => 'CAMPO DE LA CRUZ',
                'code' => '08137',
                'department_id' => 2
            ],
            [
                'name' => 'CANDELARIA',
                'code' => '08141',
                'department_id' => 2
            ],
            [
                'name' => 'GALAPA',
                'code' => '08296',
                'department_id' => 2
            ],
            [
                'name' => 'JUAN DE ACOSTA',
                'code' => '08372',
                'department_id' => 2
            ],
            [
                'name' => 'LURUACO',
                'code' => '08421',
                'department_id' => 2
            ],
            [
                'name' => 'MALAMBO',
                'code' => '08433',
                'department_id' => 2
            ],
            [
                'name' => 'MANATI',
                'code' => '08436',
                'department_id' => 2
            ],
            [
                'name' => 'PALMAR DE VARELA',
                'code' => '08520',
                'department_id' => 2
            ],
            [
                'name' => 'PIOJO',
                'code' => '08549',
                'department_id' => 2
            ],
            [
                'name' => 'POLO NUEVO',
                'code' => '08558',
                'department_id' => 2
            ],
            [
                'name' => 'PONEDERA',
                'code' => '08560',
                'department_id' => 2
            ],
            [
                'name' => 'PUERTO COLOMBIA',
                'code' => '08573',
                'department_id' => 2
            ],
            [
                'name' => 'REPELON',
                'code' => '08606',
                'department_id' => 2
            ],
            [
                'name' => 'SABANAGRANDE',
                'code' => '08634',
                'department_id' => 2
            ],
            [
                'name' => 'SABANALARGA',
                'code' => '08638',
                'department_id' => 2
            ],
            [
                'name' => 'SANTA LUCIA',
                'code' => '08675',
                'department_id' => 2
            ],
            [
                'name' => 'SANTO TOMAS',
                'code' => '08685',
                'department_id' => 2
            ],
            [
                'name' => 'SOLEDAD',
                'code' => '08758',
                'department_id' => 2
            ],
            [
                'name' => 'SUAN',
                'code' => '08770',
                'department_id' => 2
            ],
            [
                'name' => 'TUBARA',
                'code' => '08832',
                'department_id' => 2
            ],
            [
                'name' => 'USIACURI',
                'code' => '08849',
                'department_id' => 2
            ],
            [
                'name' => 'BOGOTA',
                'code' => '11001',
                'department_id' => 3
            ],
            [
                'name' => 'CARTAGENA',
                'code' => '13001',
                'department_id' => 4
            ],
            [
                'name' => 'ACHI',
                'code' => '13006',
                'department_id' => 4
            ],
            [
                'name' => 'ALTOS DEL ROSARIO',
                'code' => '13030',
                'department_id' => 4
            ],
            [
                'name' => 'ARENAL',
                'code' => '13042',
                'department_id' => 4
            ],
            [
                'name' => 'ARJONA',
                'code' => '13052',
                'department_id' => 4
            ],
            [
                'name' => 'ARROYOHONDO',
                'code' => '13062',
                'department_id' => 4
            ],
            [
                'name' => 'BARRANCO DE LOBA',
                'code' => '13074',
                'department_id' => 4
            ],
            [
                'name' => 'CALAMAR',
                'code' => '13140',
                'department_id' => 4
            ],
            [
                'name' => 'CANTAGALLO',
                'code' => '13160',
                'department_id' => 4
            ],
            [
                'name' => 'CICUCO',
                'code' => '13188',
                'department_id' => 4
            ],
            [
                'name' => 'CORDOBA',
                'code' => '13212',
                'department_id' => 4
            ],
            [
                'name' => 'CLEMENCIA',
                'code' => '13222',
                'department_id' => 4
            ],
            [
                'name' => 'EL CARMEN DE BOLIVAR',
                'code' => '13244',
                'department_id' => 4
            ],
            [
                'name' => 'EL GUAMO',
                'code' => '13248',
                'department_id' => 4
            ],
            [
                'name' => 'EL PEÑON',
                'code' => '13268',
                'department_id' => 4
            ],
            [
                'name' => 'HATILLO DE LOBA',
                'code' => '13300',
                'department_id' => 4
            ],
            [
                'name' => 'MAGANGUE',
                'code' => '13430',
                'department_id' => 4
            ],
            [
                'name' => 'MAHATES',
                'code' => '13433',
                'department_id' => 4
            ],
            [
                'name' => 'MARGARITA',
                'code' => '13440',
                'department_id' => 4
            ],
            [
                'name' => 'MARIA LA BAJA',
                'code' => '13442',
                'department_id' => 4
            ],
            [
                'name' => 'MONTECRISTO',
                'code' => '13458',
                'department_id' => 4
            ],
            [
                'name' => 'MOMPOS',
                'code' => '13468',
                'department_id' => 4
            ],
            [
                'name' => 'MORALES',
                'code' => '13473',
                'department_id' => 4
            ],
            [
                'name' => 'MOROSI',
                'code' => '13490',
                'department_id' => 4
            ],
            [
                'name' => 'PINILLOS',
                'code' => '13549',
                'department_id' => 4
            ],
            [
                'name' => 'REGIDOR',
                'code' => '13580',
                'department_id' => 4
            ],
            [
                'name' => 'RIO VIEJO',
                'code' => '13600',
                'department_id' => 4
            ],
            [
                'name' => 'SAN CRISTOBAL',
                'code' => '13620',
                'department_id' => 4
            ],
            [
                'name' => 'SAN ESTANISLAO',
                'code' => '13647',
                'department_id' => 4
            ],
            [
                'name' => 'SAN FERNANDO',
                'code' => '13650',
                'department_id' => 4
            ],
            [
                'name' => 'SAN JACINTO',
                'code' => '13654',
                'department_id' => 4
            ],
            [
                'name' => 'SAN JACINTO DEL CAUCA',
                'code' => '13655',
                'department_id' => 4
            ],
            [
                'name' => 'SAN JUAN NEPOMUCENO',
                'code' => '13657',
                'department_id' => 4
            ],
            [
                'name' => 'SAN MARTIN DE LOBA',
                'code' => '13667',
                'department_id' => 4
            ],
            [
                'name' => 'SAN PABLO SUR',
                'code' => '13670',
                'department_id' => 4
            ],
            [
                'name' => 'SANTA CATALINA',
                'code' => '13673',
                'department_id' => 4
            ],
            [
                'name' => 'SANTA ROSA DE LIMA',
                'code' => '13683',
                'department_id' => 4
            ],
            [
                'name' => 'SANTA ROSA DEL SUR',
                'code' => '13688',
                'department_id' => 4
            ],
            [
                'name' => 'SIMITI',
                'code' => '13744',
                'department_id' => 4
            ],
            [
                'name' => 'SOPLAVIENTO',
                'code' => '13760',
                'department_id' => 4
            ],
            [
                'name' => 'TALAIGUA NUEVO',
                'code' => '13780',
                'department_id' => 4
            ],
            [
                'name' => 'TIQUISIO',
                'code' => '13810',
                'department_id' => 4
            ],
            [
                'name' => 'TURBACO',
                'code' => '13836',
                'department_id' => 4
            ],
            [
                'name' => 'TURBANA',
                'code' => '13838',
                'department_id' => 4
            ],
            [
                'name' => 'VILLANUEVA',
                'code' => '13873',
                'department_id' => 4
            ],
            [
                'name' => 'ZAMBRANO',
                'code' => '13894',
                'department_id' => 4
            ],
            [
                'name' => 'TUNJA',
                'code' => '15001',
                'department_id' => 5
            ],
            [
                'name' => ' ALMEIDA',
                'code' => '15022',
                'department_id' => 5
            ],
            [
                'name' => 'AQUITANIA',
                'code' => '15047',
                'department_id' => 5
            ],
            [
                'name' => 'ARCABUCO',
                'code' => '15051',
                'department_id' => 5
            ],
            [
                'name' => 'BELEN',
                'code' => '15087',
                'department_id' => 5
            ],
            [
                'name' => 'BERBEO',
                'code' => '15090',
                'department_id' => 5
            ],
            [
                'name' => 'BETEITIVA',
                'code' => '15092',
                'department_id' => 5
            ],
            [
                'name' => 'BOAVITA',
                'code' => '15097',
                'department_id' => 5
            ],
            [
                'name' => 'BOYACA',
                'code' => '15104',
                'department_id' => 5
            ],
            [
                'name' => 'BRICEÑO',
                'code' => '15106',
                'department_id' => 5
            ],
            [
                'name' => 'BUENAVISTA',
                'code' => '15109',
                'department_id' => 5
            ],
            [
                'name' => 'BUSBANZA',
                'code' => '15114',
                'department_id' => 5
            ],
            [
                'name' => 'CALDAS',
                'code' => '15131',
                'department_id' => 5
            ],
            [
                'name' => 'CAMPOHERMOSO',
                'code' => '15135',
                'department_id' => 5
            ],
            [
                'name' => 'CERINZA',
                'code' => '15162',
                'department_id' => 5
            ],
            [
                'name' => 'CHINAVITA',
                'code' => '15172',
                'department_id' => 5
            ],
            [
                'name' => 'CUIQUINQUIRA',
                'code' => '15176',
                'department_id' => 5
            ],
            [
                'name' => 'CHISCAS',
                'code' => '15180',
                'department_id' => 5
            ],
            [
                'name' => 'CHITA',
                'code' => '15183',
                'department_id' => 5
            ],
            [
                'name' => 'CHITARAQUE',
                'code' => '15185',
                'department_id' => 5
            ],
            [
                'name' => 'CHIVATA',
                'code' => '15187',
                'department_id' => 5
            ],
            [
                'name' => 'CIENAGA',
                'code' => '15189',
                'department_id' => 5
            ],
            [
                'name' => 'COMBITA',
                'code' => '15204',
                'department_id' => 5
            ],
            [
                'name' => 'COPER',
                'code' => '15212',
                'department_id' => 5
            ],
            [
                'name' => 'CORRALES',
                'code' => '15215',
                'department_id' => 5
            ],
            [
                'name' => 'COVARACHICA',
                'code' => '15218',
                'department_id' => 5
            ],
            [
                'name' => 'CUBARA',
                'code' => '15223',
                'department_id' => 5
            ],
            [
                'name' => 'CUCAITA',
                'code' => '15224',
                'department_id' => 5
            ],
            [
                'name' => 'CUITIVA',
                'code' => '15226',
                'department_id' => 5
            ],
            [
                'name' => 'CHIQUIZA',
                'code' => '15232',
                'department_id' => 5
            ],
            [
                'name' => 'CHIVOR',
                'code' => '15236',
                'department_id' => 5
            ],
            [
                'name' => 'DUITAMA',
                'code' => '15238',
                'department_id' => 5
            ],
            [
                'name' => 'EL COCUY',
                'code' => '15244',
                'department_id' => 5
            ],
            [
                'name' => 'EL ESPINO',
                'code' => '15248',
                'department_id' => 5
            ],
            [
                'name' => 'FIRAVITOVA',
                'code' => '15272',
                'department_id' => 5
            ],
            [
                'name' => 'FLORESTA',
                'code' => '15276',
                'department_id' => 5
            ],
            [
                'name' => 'CACHANTIVA',
                'code' => '15293',
                'department_id' => 5
            ],
            [
                'name' => 'GAMEZA',
                'code' => '15296',
                'department_id' => 5
            ],
            [
                'name' => 'GARAGOA',
                'code' => '15299',
                'department_id' => 5
            ],
            [
                'name' => 'GUACAMAYAS',
                'code' => '15317',
                'department_id' => 5
            ],
            [
                'name' => 'GUATEQUE',
                'code' => '15322',
                'department_id' => 5
            ],
            [
                'name' => 'GUAYATA',
                'code' => '15325',
                'department_id' => 5
            ],
            [
                'name' => 'GUICAN DE LA SIERRA',
                'code' => '15332',
                'department_id' => 5
            ],
            [
                'name' => 'IZA',
                'code' => '15362',
                'department_id' => 5
            ],
            [
                'name' => 'JENESANO',
                'code' => '15367',
                'department_id' => 5
            ],
            [
                'name' => 'JERICO',
                'code' => '15368',
                'department_id' => 5
            ],
            [
                'name' => 'LABRANZAGRANDE',
                'code' => '15377',
                'department_id' => 5
            ],
            [
                'name' => 'LA CAPILLA',
                'code' => '15380',
                'department_id' => 5
            ],
            [
                'name' => 'LA VICTORIA',
                'code' => '15401',
                'department_id' => 5
            ],
            [
                'name' => 'LA UVITA',
                'code' => '15403',
                'department_id' => 5
            ],
            [
                'name' => 'VILLA DE LEIVA',
                'code' => '15407',
                'department_id' => 5
            ],
            [
                'name' => 'MACANAL',
                'code' => '15425',
                'department_id' => 5
            ],
            [
                'name' => 'MARIPI',
                'code' => '15442',
                'department_id' => 5
            ],
            [
                'name' => 'MIRAFLORES',
                'code' => '15455',
                'department_id' => 5
            ],
            [
                'name' => 'MONGUA',
                'code' => '15464',
                'department_id' => 5
            ],
            [
                'name' => 'MONGUI',
                'code' => '15466',
                'department_id' => 5
            ],
            [
                'name' => 'MONIQUIRA',
                'code' => '15469',
                'department_id' => 5
            ],
            [
                'name' => 'MOTAVITA',
                'code' => '15476',
                'department_id' => 5
            ],
            [
                'name' => 'MUZO',
                'code' => '15480',
                'department_id' => 5
            ],
            [
                'name' => 'NOBSA',
                'code' => '15491',
                'department_id' => 5
            ],
            [
                'name' => 'NUEVO COLON',
                'code' => '15494',
                'department_id' => 5
            ],
            [
                'name' => 'OICATA',
                'code' => '15500',
                'department_id' => 5
            ],
            [
                'name' => 'OTANCHE',
                'code' => '15507',
                'department_id' => 5
            ],
            [
                'name' => 'PACHAVITA',
                'code' => '15511',
                'department_id' => 5
            ],
            [
                'name' => 'PAEZ',
                'code' => '15514',
                'department_id' => 5
            ],
            [
                'name' => 'PAIPA',
                'code' => '15516',
                'department_id' => 5
            ],
            [
                'name' => 'PAJARITO',
                'code' => '15518',
                'department_id' => 5
            ],
            [
                'name' => 'PANQUEVA',
                'code' => '15522',
                'department_id' => 5
            ],
            [
                'name' => 'PAUNA',
                'code' => '15531',
                'department_id' => 5
            ],
            [
                'name' => 'PAYA',
                'code' => '15533',
                'department_id' => 5
            ],
            [
                'name' => 'PAZ DEL RIO',
                'code' => '15537',
                'department_id' => 5
            ],
            [
                'name' => 'PESCA',
                'code' => '15542',
                'department_id' => 5
            ],
            [
                'name' => 'PISBA',
                'code' => '15550',
                'department_id' => 5
            ],
            [
                'name' => 'PUERTO BOYACA',
                'code' => '15572',
                'department_id' => 5
            ],
            [
                'name' => 'QUIPAMA',
                'code' => '15580',
                'department_id' => 5
            ],
            [
                'name' => 'RAMIRIQUI',
                'code' => '15599',
                'department_id' => 5
            ],
            [
                'name' => 'RAQUIRA',
                'code' => '15600',
                'department_id' => 5
            ],
            [
                'name' => 'RONDON',
                'code' => '15621',
                'department_id' => 5
            ],
            [
                'name' => 'SABOYA',
                'code' => '15632',
                'department_id' => 5
            ],
            [
                'name' => 'SACHICA',
                'code' => '15638',
                'department_id' => 5
            ],
            [
                'name' => 'SAMACA',
                'code' => '15646',
                'department_id' => 5
            ],
            [
                'name' => 'SAN EDUARDO',
                'code' => '15660',
                'department_id' => 5
            ],
            [
                'name' => 'SAN JOSE DE PARE',
                'code' => '15664',
                'department_id' => 5
            ],
            [
                'name' => 'SAN LUIS GACENO',
                'code' => '15667',
                'department_id' => 5
            ],
            [
                'name' => 'SAN MATEO',
                'code' => '15673',
                'department_id' => 5
            ],
            [
                'name' => 'SAN MIGUEL DE SEMA',
                'code' => '15676',
                'department_id' => 5
            ],
            [
                'name' => 'SAN PABLO DE BORBUR',
                'code' => '15681',
                'department_id' => 5
            ],
            [
                'name' => 'SANTANA',
                'code' => '15686',
                'department_id' => 5
            ],
            [
                'name' => 'SANTA MARIA',
                'code' => '15690',
                'department_id' => 5
            ],
            [
                'name' => 'SANTA ROSA DE VITERBO',
                'code' => '15693',
                'department_id' => 5
            ],
            [
                'name' => 'SANTA SOFIA',
                'code' => '15696',
                'department_id' => 5
            ],
            [
                'name' => 'SANTIVANORTE',
                'code' => '15720',
                'department_id' => 5
            ],
            [
                'name' => 'SANTIVASUR',
                'code' => '15723',
                'department_id' => 5
            ],
            [
                'name' => 'SIACHOQUE',
                'code' => '15740',
                'department_id' => 5
            ],
            [
                'name' => 'SOATA',
                'code' => '15753',
                'department_id' => 5
            ],
            [
                'name' => 'SOCOTA',
                'code' => '15755',
                'department_id' => 5
            ],
            [
                'name' => 'SOCHA',
                'code' => '15757',
                'department_id' => 5
            ],
            [
                'name' => 'SOGAMOSO',
                'code' => '15759',
                'department_id' => 5
            ],
            [
                'name' => 'SOMONDOCO',
                'code' => '15761',
                'department_id' => 5
            ],
            [
                'name' => 'SORA',
                'code' => '15762',
                'department_id' => 5
            ],
            [
                'name' => 'SOTAQUIRA',
                'code' => '15763',
                'department_id' => 5
            ],
            [
                'name' => 'SORACA',
                'code' => '15764',
                'department_id' => 5
            ],
            [
                'name' => 'SUSACON',
                'code' => '15774',
                'department_id' => 5
            ],
            [
                'name' => 'SUTAMARCHAN',
                'code' => '15776',
                'department_id' => 5
            ],
            [
                'name' => 'SUTATENZA',
                'code' => '15778',
                'department_id' => 5
            ],
            [
                'name' => 'TASCO',
                'code' => '15790',
                'department_id' => 5
            ],
            [
                'name' => 'TENZA',
                'code' => '15798',
                'department_id' => 5
            ],
            [
                'name' => 'TIBANA',
                'code' => '15804',
                'department_id' => 5
            ],
            [
                'name' => 'TIBASOSA',
                'code' => '15806',
                'department_id' => 5
            ],
            [
                'name' => 'TIMJACA',
                'code' => '15808',
                'department_id' => 5
            ],
            [
                'name' => 'TIPACOQUE',
                'code' => '15810',
                'department_id' => 5
            ],
            [
                'name' => 'TOCA',
                'code' => '15814',
                'department_id' => 5
            ],
            [
                'name' => 'TOGUI',
                'code' => '15816',
                'department_id' => 5
            ],
            [
                'name' => 'TOPAGA',
                'code' => '15820',
                'department_id' => 5
            ],
            [
                'name' => 'TOTA',
                'code' => '15822',
                'department_id' => 5
            ],
            [
                'name' => 'TUNUNGUA',
                'code' => '15832',
                'department_id' => 5
            ],
            [
                'name' => 'TURMEQUE',
                'code' => '15835',
                'department_id' => 5
            ],
            [
                'name' => 'TUTA',
                'code' => '15837',
                'department_id' => 5
            ],
            [
                'name' => 'TUTAZA',
                'code' => '15839',
                'department_id' => 5
            ],
            [
                'name' => 'UMBITA',
                'code' => '15842',
                'department_id' => 5
            ],
            [
                'name' => 'VENTAQUEMADA',
                'code' => '15861',
                'department_id' => 5
            ],
            [
                'name' => 'VIRACACHA',
                'code' => '15879',
                'department_id' => 5
            ],
            [
                'name' => 'ZETAQUIRA',
                'code' => '15897',
                'department_id' => 5
            ],
            [
                'name' => 'MANIZALES',
                'code' => '17001',
                'department_id' => 6
            ],
            [
                'name' => 'AGUADAS',
                'code' => '17013',
                'department_id' => 6
            ],
            [
                'name' => 'ANSERMA',
                'code' => '17042',
                'department_id' => 6
            ],
            [
                'name' => 'ARANZAZU',
                'code' => '17050',
                'department_id' => 6
            ],
            [
                'name' => 'BELALCAZAR',
                'code' => '17088',
                'department_id' => 6
            ],
            [
                'name' => 'CHINCHINA',
                'code' => '17114',
                'department_id' => 6
            ],
            [
                'name' => 'FILADELFIA',
                'code' => '17272',
                'department_id' => 6
            ],
            [
                'name' => 'LA DORADA',
                'code' => '17380',
                'department_id' => 6
            ],
            [
                'name' => 'LA MERCED',
                'code' => '17388',
                'department_id' => 6
            ],
            [
                'name' => 'MANZANARES',
                'code' => '17433',
                'department_id' => 6
            ],
            [
                'name' => 'MARMATO',
                'code' => '17442',
                'department_id' => 6
            ],
            [
                'name' => 'MARQUETALIA',
                'code' => '17444',
                'department_id' => 6
            ],
            [
                'name' => 'MARULANDA',
                'code' => '17446',
                'department_id' => 6
            ],
            [
                'name' => 'NEIRA',
                'code' => '17486',
                'department_id' => 6
            ],
            [
                'name' => 'NORCASIA',
                'code' => '17495',
                'department_id' => 6
            ],
            [
                'name' => 'PACORA',
                'code' => '17513',
                'department_id' => 6
            ],
            [
                'name' => 'PALESTINA',
                'code' => '17524',
                'department_id' => 6
            ],
            [
                'name' => 'PENSILVANIA',
                'code' => '17541',
                'department_id' => 6
            ],
            [
                'name' => 'RIOSUCIO',
                'code' => '17614',
                'department_id' => 6
            ],
            [
                'name' => 'RISARALDA',
                'code' => '17616',
                'department_id' => 6
            ],
            [
                'name' => 'SALAMINA',
                'code' => '17653',
                'department_id' => 6
            ],
            [
                'name' => 'SAMANA',
                'code' => '17662',
                'department_id' => 6
            ],
            [
                'name' => 'SAN JOSE',
                'code' => '17665',
                'department_id' => 6
            ],
            [
                'name' => 'SUPIA',
                'code' => '17777',
                'department_id' => 6
            ],
            [
                'name' => 'VICTORIA',
                'code' => '17867',
                'department_id' => 6
            ],
            [
                'name' => 'VILLAMARIA',
                'code' => '17873',
                'department_id' => 6
            ],
            [
                'name' => 'VITERBO',
                'code' => '17877',
                'department_id' => 6
            ],
            [
                'name' => 'FLORENCIA',
                'code' => '18001',
                'department_id' => 7
            ],
            [
                'name' => 'ALBANZA',
                'code' => '18029',
                'department_id' => 7
            ],
            [
                'name' => 'BELEN DE LOS ANDAQUIES',
                'code' => '18094',
                'department_id' => 7
            ],
            [
                'name' => 'CARTAGENA DEL CHAIRA',
                'code' => '18150',
                'department_id' => 7
            ],
            [
                'name' => 'CURILLO',
                'code' => '18205',
                'department_id' => 7
            ],
            [
                'name' => 'EL DONCELLO',
                'code' => '18247',
                'department_id' => 7
            ],
            [
                'name' => 'EL PAJUIL',
                'code' => '18256',
                'department_id' => 7
            ],
            [
                'name' => 'LA MONTAÑITA',
                'code' => '18410',
                'department_id' => 7
            ],
            [
                'name' => 'MILAN',
                'code' => '18460',
                'department_id' => 7
            ],
            [
                'name' => 'MORELIA',
                'code' => '18479',
                'department_id' => 7
            ],
            [
                'name' => 'PUERTO RICO',
                'code' => '18592',
                'department_id' => 7
            ],
            [
                'name' => 'SAN JOSE DEL FRAGUA',
                'code' => '18610',
                'department_id' => 7
            ],
            [
                'name' => 'SAN VICENTE DEL CAGUAN',
                'code' => '18753',
                'department_id' => 7
            ],
            [
                'name' => 'SOLANO',
                'code' => '18756',
                'department_id' => 7
            ],
            [
                'name' => 'SOLITA',
                'code' => '18785',
                'department_id' => 7
            ],
            [
                'name' => 'VALPARAISO',
                'code' => '18860',
                'department_id' => 7
            ],
            [
                'name' => 'POPAYAN',
                'code' => '19001',
                'department_id' => 8
            ],
            [
                'name' => 'ALMAGUER',
                'code' => '19022',
                'department_id' => 8
            ],
            [
                'name' => 'ARGELIA',
                'code' => '19050',
                'department_id' => 8
            ],
            [
                'name' => 'BALBOA',
                'code' => '19075',
                'department_id' => 8
            ],
            [
                'name' => 'BOLIVAR',
                'code' => '19100',
                'department_id' => 8
            ],
            [
                'name' => 'BUENOS AIRES',
                'code' => '19110',
                'department_id' => 8
            ],
            [
                'name' => 'CAJIBIO',
                'code' => '19130',
                'department_id' => 8
            ],
            [
                'name' => 'CALDOMO',
                'code' => '19137',
                'department_id' => 8
            ],
            [
                'name' => 'CALOTO',
                'code' => '19142',
                'department_id' => 8
            ],
            [
                'name' => 'CORINTO',
                'code' => '19212',
                'department_id' => 8
            ],
            [
                'name' => 'EL TAMBO',
                'code' => '19256',
                'department_id' => 8
            ],
            [
                'name' => 'FLORENCIA',
                'code' => '19290',
                'department_id' => 8
            ],
            [
                'name' => 'GUACHENE',
                'code' => '19300',
                'department_id' => 8
            ],
            [
                'name' => 'GUAPI',
                'code' => '19318',
                'department_id' => 8
            ],
            [
                'name' => 'INZA',
                'code' => '19355',
                'department_id' => 8
            ],
            [
                'name' => 'JAMBALO',
                'code' => '19364',
                'department_id' => 8
            ],
            [
                'name' => 'LA SIERRA',
                'code' => '19392',
                'department_id' => 8
            ],
            [
                'name' => 'LA VEGA',
                'code' => '19397',
                'department_id' => 8
            ],
            [
                'name' => 'LOPEZ DE MICAY',
                'code' => '19418',
                'department_id' => 8
            ],
            [
                'name' => 'MERCADERES',
                'code' => '19450',
                'department_id' => 8
            ],
            [
                'name' => 'MIRANDA',
                'code' => '19455',
                'department_id' => 8
            ],
            [
                'name' => 'MORALES',
                'code' => '19473',
                'department_id' => 8
            ],
            [
                'name' => 'PADILLA',
                'code' => '19513',
                'department_id' => 8
            ],
            [
                'name' => 'PAEZ - BELALCAZAR',
                'code' => '19517',
                'department_id' => 8
            ],
            [
                'name' => 'PATIA - EL BORDO',
                'code' => '19532',
                'department_id' => 8
            ],
            [
                'name' => 'PIAMONTE',
                'code' => '19533',
                'department_id' => 8
            ],
            [
                'name' => 'PIENDAMO - TUNIA',
                'code' => '19548',
                'department_id' => 8
            ],
            [
                'name' => 'PUERTO TEJADA',
                'code' => '19573',
                'department_id' => 8
            ],
            [
                'name' => 'PURACE - COCONUCO',
                'code' => '19585',
                'department_id' => 8
            ],
            [
                'name' => 'ROSAS',
                'code' => '19622',
                'department_id' => 8
            ],
            [
                'name' => 'SAN SEBASTIAN',
                'code' => '19693',
                'department_id' => 8
            ],
            [
                'name' => 'SANTANDER DE QUILICHAO',
                'code' => '19698',
                'department_id' => 8
            ],
            [
                'name' => 'SANTA ROSA',
                'code' => '19701',
                'department_id' => 8
            ],
            [
                'name' => 'SILVIA',
                'code' => '19743',
                'department_id' => 8
            ],
            [
                'name' => 'SOTARA',
                'code' => '19760',
                'department_id' => 8
            ],
            [
                'name' => 'SUAREZ',
                'code' => '19780',
                'department_id' => 8
            ],
            [
                'name' => 'SUCRE',
                'code' => '19785',
                'department_id' => 8
            ],
            [
                'name' => 'TIMBIO',
                'code' => '19807',
                'department_id' => 8
            ],
            [
                'name' => 'TIMBIQUI',
                'code' => '19809',
                'department_id' => 8
            ],
            [
                'name' => 'TORIBIO',
                'code' => '19821',
                'department_id' => 8
            ],
            [
                'name' => 'TOTORO',
                'code' => '19824',
                'department_id' => 8
            ],
            [
                'name' => 'VILLA RICA',
                'code' => '19845',
                'department_id' => 8
            ],
            [
                'name' => 'VALLEDUPAR',
                'code' => '20001',
                'department_id' => 9
            ],
            [
                'name' => 'AGUACHICA',
                'code' => '20011',
                'department_id' => 9
            ],
            [
                'name' => 'AGUSTIN CODAZI',
                'code' => '20013',
                'department_id' => 9
            ],
            [
                'name' => 'ASTREA',
                'code' => '20032',
                'department_id' => 9
            ],
            [
                'name' => 'BECERRIL',
                'code' => '20045',
                'department_id' => 9
            ],
            [
                'name' => 'BOSCONIA',
                'code' => '20060',
                'department_id' => 9
            ],
            [
                'name' => 'CHIMICHAGUA',
                'code' => '20175',
                'department_id' => 9
            ],
            [
                'name' => 'CHIRIGUANA',
                'code' => '20178',
                'department_id' => 9
            ],
            [
                'name' => 'CURUMANI',
                'code' => '20228',
                'department_id' => 9
            ],
            [
                'name' => 'EL COPEY',
                'code' => '20238',
                'department_id' => 9
            ],
            [
                'name' => 'EL PASO',
                'code' => '20250',
                'department_id' => 9
            ],
            [
                'name' => 'GAMARRA',
                'code' => '20295',
                'department_id' => 9
            ],
            [
                'name' => 'GONZALEZ',
                'code' => '20310',
                'department_id' => 9
            ],
            [
                'name' => 'LA GLORIA',
                'code' => '20383',
                'department_id' => 9
            ],
            [
                'name' => 'LA JAGUA DE IBIRICO',
                'code' => '20400',
                'department_id' => 9
            ],
            [
                'name' => 'MANAURE BALCON DEL CESAR',
                'code' => '20443',
                'department_id' => 9
            ],
            [
                'name' => 'PAILITAS',
                'code' => '20517',
                'department_id' => 9
            ],
            [
                'name' => 'PELAYA',
                'code' => '20550',
                'department_id' => 9
            ],
            [
                'name' => 'PUEBLO BELLO',
                'code' => '20570',
                'department_id' => 9
            ],
            [
                'name' => 'RIO DE ORO',
                'code' => '20614',
                'department_id' => 9
            ],
            [
                'name' => 'LA PAZ',
                'code' => '20621',
                'department_id' => 9
            ],
            [
                'name' => 'SAN ALBERTO',
                'code' => '20710',
                'department_id' => 9
            ],
            [
                'name' => 'SAN DIEGO',
                'code' => '20750',
                'department_id' => 9
            ],
            [
                'name' => 'SAN MARTIN',
                'code' => '20770',
                'department_id' => 9
            ],
            [
                'name' => 'TAMALAMEQUE',
                'code' => '20787',
                'department_id' => 9
            ],
            [
                'name' => 'MONTERIA',
                'code' => '23001',
                'department_id' => 10
            ],
            [
                'name' => 'AYAPEL',
                'code' => '23068',
                'department_id' => 10
            ],
            [
                'name' => 'BUENAVISTA',
                'code' => '23079',
                'department_id' => 10
            ],
            [
                'name' => 'CANALETE',
                'code' => '23090',
                'department_id' => 10
            ],
            [
                'name' => 'CERETE',
                'code' => '23162',
                'department_id' => 10
            ],
            [
                'name' => 'CHIMA',
                'code' => '23168',
                'department_id' => 10
            ],
            [
                'name' => 'CHINU',
                'code' => '23182',
                'department_id' => 10
            ],
            [
                'name' => 'CIENAGA DE ORO',
                'code' => '23189',
                'department_id' => 10
            ],
            [
                'name' => 'COTORRA',
                'code' => '23300',
                'department_id' => 10
            ],
            [
                'name' => 'LA APARTADA',
                'code' => '23350',
                'department_id' => 10
            ],
            [
                'name' => 'LORICA',
                'code' => '23417',
                'department_id' => 10
            ],
            [
                'name' => 'LOS CORDOBAS',
                'code' => '23419',
                'department_id' => 10
            ],
            [
                'name' => 'MOMIL',
                'code' => '23464',
                'department_id' => 10
            ],
            [
                'name' => 'MONTELIBANO',
                'code' => '23466',
                'department_id' => 10
            ],
            [
                'name' => 'MOÑITOS',
                'code' => '23500',
                'department_id' => 10
            ],
            [
                'name' => 'PLANETA RICA',
                'code' => '23555',
                'department_id' => 10
            ],
            [
                'name' => 'PUEBLO NUEVO',
                'code' => '23570',
                'department_id' => 10
            ],
            [
                'name' => 'PUERTO ESCONDIDO',
                'code' => '23574',
                'department_id' => 10
            ],
            [
                'name' => 'PUERTO LIBERTADOR',
                'code' => '23580',
                'department_id' => 10
            ],
            [
                'name' => 'PURISIMA DE LA CONCEPCION',
                'code' => '23586',
                'department_id' => 10
            ],
            [
                'name' => 'SAHAGUN',
                'code' => '23660',
                'department_id' => 10
            ],
            [
                'name' => 'SAN ANDRES DE SOTAVENTO',
                'code' => '23670',
                'department_id' => 10
            ],
            [
                'name' => 'SAN ANTERO',
                'code' => '23672',
                'department_id' => 10
            ],
            [
                'name' => 'SAN BERNARDO DEL VIENTO',
                'code' => '23675',
                'department_id' => 10
            ],
            [
                'name' => 'SAN CARLOS',
                'code' => '23678',
                'department_id' => 10
            ],
            [
                'name' => 'SAN JOSE DE URE',
                'code' => '23682',
                'department_id' => 10
            ],
            [
                'name' => 'SAN PELAYO',
                'code' => '23686',
                'department_id' => 10
            ],
            [
                'name' => 'TIERRA ALTA',
                'code' => '23807',
                'department_id' => 10
            ],
            [
                'name' => 'TUCHIN',
                'code' => '23815',
                'department_id' => 10
            ],
            [
                'name' => 'VALENCIA',
                'code' => '23855',
                'department_id' => 10
            ],
            [
                'name' => 'AGUA DE DIOS',
                'code' => '25001',
                'department_id' => 11
            ],
            [
                'name' => 'ALBAN',
                'code' => '25019',
                'department_id' => 11
            ],
            [
                'name' => 'ANAPOIMA',
                'code' => '25035',
                'department_id' => 11
            ],
            [
                'name' => 'ANOLAIMA',
                'code' => '25040',
                'department_id' => 11
            ],
            [
                'name' => 'ARBELAEZ',
                'code' => '25053',
                'department_id' => 11
            ],
            [
                'name' => 'BELTRAN',
                'code' => '25086',
                'department_id' => 11
            ],
            [
                'name' => 'BITUIMA',
                'code' => '25095',
                'department_id' => 11
            ],
            [
                'name' => 'BOJACA',
                'code' => '25099',
                'department_id' => 11
            ],
            [
                'name' => 'CABRERA',
                'code' => '25120',
                'department_id' => 11
            ],
            [
                'name' => 'CACHIPAY',
                'code' => '25123',
                'department_id' => 11
            ],
            [
                'name' => 'CAJICA',
                'code' => '25126',
                'department_id' => 11
            ],
            [
                'name' => 'CAPARRAPI',
                'code' => '25148',
                'department_id' => 11
            ],
            [
                'name' => 'CAQUEZA',
                'code' => '25151',
                'department_id' => 11
            ],
            [
                'name' => 'CARMEN DE CARUPA',
                'code' => '25154',
                'department_id' => 11
            ],
            [
                'name' => 'CHAGUANI',
                'code' => '25168',
                'department_id' => 11
            ],
            [
                'name' => 'CHIA',
                'code' => '25175',
                'department_id' => 11
            ],
            [
                'name' => 'CHIPAQUE',
                'code' => '25178',
                'department_id' => 11
            ],
            [
                'name' => 'COACHI',
                'code' => '25181',
                'department_id' => 11
            ],
            [
                'name' => 'CHOCONTA',
                'code' => '25183',
                'department_id' => 11
            ],
            [
                'name' => 'COGUA',
                'code' => '25200',
                'department_id' => 11
            ],
            [
                'name' => 'COTA',
                'code' => '25214',
                'department_id' => 11
            ],
            [
                'name' => 'CUCUNUBA',
                'code' => '25224',
                'department_id' => 11
            ],
            [
                'name' => 'EL COLEGIO',
                'code' => '25245',
                'department_id' => 11
            ],
            [
                'name' => 'EL PEÑON',
                'code' => '25258',
                'department_id' => 11
            ],
            [
                'name' => 'EL ROSAL',
                'code' => '25260',
                'department_id' => 11
            ],
            [
                'name' => 'FACACATIVA',
                'code' => '25269',
                'department_id' => 11
            ],
            [
                'name' => 'FOMEQUE',
                'code' => '25279',
                'department_id' => 11
            ],
            [
                'name' => 'FOSCA',
                'code' => '25281',
                'department_id' => 11
            ],
            [
                'name' => 'FUNZA',
                'code' => '25286',
                'department_id' => 11
            ],
            [
                'name' => 'FUQUENE',
                'code' => '25288',
                'department_id' => 11
            ],
            [
                'name' => 'FUSAGASUGA',
                'code' => '25290',
                'department_id' => 11
            ],
            [
                'name' => 'GACHALA',
                'code' => '25293',
                'department_id' => 11
            ],
            [
                'name' => 'GACJANCIPA',
                'code' => '25295',
                'department_id' => 11
            ],
            [
                'name' => 'GACHETA',
                'code' => '25297',
                'department_id' => 11
            ],
            [
                'name' => 'GAMA',
                'code' => '25299',
                'department_id' => 11
            ],
            [
                'name' => 'GIRARDOT',
                'code' => '25307',
                'department_id' => 11
            ],
            [
                'name' => 'GRANADA',
                'code' => '25312',
                'department_id' => 11
            ],
            [
                'name' => 'GUACHETA',
                'code' => '25317',
                'department_id' => 11
            ],
            [
                'name' => 'GUADUAS',
                'code' => '25320',
                'department_id' => 11
            ],
            [
                'name' => 'GUASCA',
                'code' => '25322',
                'department_id' => 11
            ],
            [
                'name' => 'GUATAQUI',
                'code' => '25324',
                'department_id' => 11
            ],
            [
                'name' => 'GUATAVITA',
                'code' => '25326',
                'department_id' => 11
            ],
            [
                'name' => 'GUAYABAL DE SIQUIMA',
                'code' => '25328',
                'department_id' => 11
            ],
            [
                'name' => 'GUAYABETAL',
                'code' => '25335',
                'department_id' => 11
            ],
            [
                'name' => 'GUTIERREZ',
                'code' => '25339',
                'department_id' => 11
            ],
            [
                'name' => 'JERUSALEN',
                'code' => '25368',
                'department_id' => 11
            ],
            [
                'name' => 'JUNIN',
                'code' => '25372',
                'department_id' => 11
            ],
            [
                'name' => 'LA CALERA',
                'code' => '25377',
                'department_id' => 11
            ],
            [
                'name' => 'LA MESA',
                'code' => '25386',
                'department_id' => 11
            ],
            [
                'name' => 'LA PALMA',
                'code' => '25394',
                'department_id' => 11
            ],
            [
                'name' => 'LA PEÑA',
                'code' => '25398',
                'department_id' => 11
            ],
            [
                'name' => 'LA VEGA',
                'code' => '25402',
                'department_id' => 11
            ],
            [
                'name' => 'LENGUAZAQUE',
                'code' => '25407',
                'department_id' => 11
            ],
            [
                'name' => 'MACHETA',
                'code' => '25426',
                'department_id' => 11
            ],
            [
                'name' => 'MADRID',
                'code' => '25430',
                'department_id' => 11
            ],
            [
                'name' => 'MANTA',
                'code' => '25436',
                'department_id' => 11
            ],
            [
                'name' => 'MEDINA',
                'code' => '25438',
                'department_id' => 11
            ],
            [
                'name' => 'MOSQUERA',
                'code' => '25473',
                'department_id' => 11
            ],
            [
                'name' => 'NARIÑO',
                'code' => '25483',
                'department_id' => 11
            ],
            [
                'name' => 'NEMOCON',
                'code' => '25486',
                'department_id' => 11
            ],
            [
                'name' => 'NILO',
                'code' => '25488',
                'department_id' => 11
            ],
            [
                'name' => 'NIMAIMA',
                'code' => '25489',
                'department_id' => 11
            ],
            [
                'name' => 'NOCAIMA',
                'code' => '25491',
                'department_id' => 11
            ],
            [
                'name' => 'VENECIA',
                'code' => '25506',
                'department_id' => 11
            ],
            [
                'name' => 'PACHO',
                'code' => '25513',
                'department_id' => 11
            ],
            [
                'name' => 'PAIME',
                'code' => '25518',
                'department_id' => 11
            ],
            [
                'name' => 'PANDI',
                'code' => '25524',
                'department_id' => 11
            ],
            [
                'name' => 'PARATEBUENO',
                'code' => '25530',
                'department_id' => 11
            ],
            [
                'name' => 'PASCA',
                'code' => '25535',
                'department_id' => 11
            ],
            [
                'name' => 'PUERTO SALGAR',
                'code' => '25572',
                'department_id' => 11
            ],
            [
                'name' => 'PULI',
                'code' => '25580',
                'department_id' => 11
            ],
            [
                'name' => 'QUEBRADANEGRA',
                'code' => '25592',
                'department_id' => 11
            ],
            [
                'name' => 'QUETAME',
                'code' => '25594',
                'department_id' => 11
            ],
            [
                'name' => 'QUIPELE',
                'code' => '25596',
                'department_id' => 11
            ],
            [
                'name' => 'APULO',
                'code' => '25599',
                'department_id' => 11
            ],
            [
                'name' => 'RICAURTE',
                'code' => '25612',
                'department_id' => 11
            ],
            [
                'name' => 'SAN ANTONIO DEL TEQUENDAMA',
                'code' => '25645',
                'department_id' => 11
            ],
            [
                'name' => 'SAN BERNARDO',
                'code' => '25649',
                'department_id' => 11
            ],
            [
                'name' => 'SAN CAYETANO',
                'code' => '25653',
                'department_id' => 11
            ],
            [
                'name' => 'SAN FRANCISCO',
                'code' => '25658',
                'department_id' => 11
            ],
            [
                'name' => 'SAN JUAN DE RIO SECO',
                'code' => '25662',
                'department_id' => 11
            ],
            [
                'name' => 'SASAIMA',
                'code' => '25718',
                'department_id' => 11
            ],
            [
                'name' => 'SESQUILE',
                'code' => '25736',
                'department_id' => 11
            ],
            [
                'name' => 'SIBATE',
                'code' => '25740',
                'department_id' => 11
            ],
            [
                'name' => 'SILVANIA',
                'code' => '25743',
                'department_id' => 11
            ],
            [
                'name' => 'SIMIJACA',
                'code' => '25745',
                'department_id' => 11
            ],
            [
                'name' => 'SOACHA',
                'code' => '25754',
                'department_id' => 11
            ],
            [
                'name' => 'SOPO',
                'code' => '25758',
                'department_id' => 11
            ],
            [
                'name' => 'SUBACHOQUE',
                'code' => '25769',
                'department_id' => 11
            ],
            [
                'name' => 'SUESCA',
                'code' => '25772',
                'department_id' => 11
            ],
            [
                'name' => 'SUPATA',
                'code' => '25777',
                'department_id' => 11
            ],
            [
                'name' => 'SUSA',
                'code' => '25779',
                'department_id' => 11
            ],
            [
                'name' => 'SUTATAISA',
                'code' => '25781',
                'department_id' => 11
            ],
            [
                'name' => 'TABIO',
                'code' => '25785',
                'department_id' => 11
            ],
            [
                'name' => 'TAUSA',
                'code' => '25793',
                'department_id' => 11
            ],
            [
                'name' => 'TENA',
                'code' => '25797',
                'department_id' => 11
            ],
            [
                'name' => 'TENJO',
                'code' => '25799',
                'department_id' => 11
            ],
            [
                'name' => 'TIBACUY',
                'code' => '25805',
                'department_id' => 11
            ],
            [
                'name' => 'TIBIRITA',
                'code' => '25807',
                'department_id' => 11
            ],
            [
                'name' => 'TOCAIMA',
                'code' => '25815',
                'department_id' => 11
            ],
            [
                'name' => 'TOCANCIPA',
                'code' => '25817',
                'department_id' => 11
            ],
            [
                'name' => 'TOPAIPI',
                'code' => '25823',
                'department_id' => 11
            ],
            [
                'name' => 'UBALA',
                'code' => '25839',
                'department_id' => 11
            ],
            [
                'name' => 'UBAQUE',
                'code' => '25841',
                'department_id' => 11
            ],
            [
                'name' => 'VILLA DE SAN DIEGO DE UBATE',
                'code' => '25843',
                'department_id' => 11
            ],
            [
                'name' => 'UNE',
                'code' => '25845',
                'department_id' => 11
            ],
            [
                'name' => 'UTICA',
                'code' => '25851',
                'department_id' => 11
            ],
            [
                'name' => 'VERGARA',
                'code' => '25862',
                'department_id' => 11
            ],
            [
                'name' => 'VIANI',
                'code' => '25867',
                'department_id' => 11
            ],
            [
                'name' => 'VILLAGOMEZ',
                'code' => '25871',
                'department_id' => 11
            ],
            [
                'name' => 'VILLAPINZON',
                'code' => '25873',
                'department_id' => 11
            ],
            [
                'name' => 'VILLETA',
                'code' => '25875',
                'department_id' => 11
            ],
            [
                'name' => 'VIOTA',
                'code' => '25878',
                'department_id' => 11
            ],
            [
                'name' => 'YACOPI',
                'code' => '25885',
                'department_id' => 11
            ],
            [
                'name' => 'ZIPACON',
                'code' => '25898',
                'department_id' => 11
            ],
            [
                'name' => 'ZIPAQUIRA',
                'code' => '25899',
                'department_id' => 11
            ],
            [
                'name' => 'QUIBDO',
                'code' => '27001',
                'department_id' => 12
            ],
            [
                'name' => 'ACANDI',
                'code' => '27006',
                'department_id' => 12
            ],
            [
                'name' => 'ALTO BAUDO',
                'code' => '27025',
                'department_id' => 12
            ],
            [
                'name' => 'ATRATO',
                'code' => '27050',
                'department_id' => 12
            ],
            [
                'name' => 'BAGADO',
                'code' => '27073',
                'department_id' => 12
            ],
            [
                'name' => 'BAHIA SOLANO',
                'code' => '27075',
                'department_id' => 12
            ],
            [
                'name' => 'BAJO BAUDO',
                'code' => '27077',
                'department_id' => 12
            ],
            [
                'name' => 'BOJAYA',
                'code' => '27099',
                'department_id' => 12
            ],
            [
                'name' => 'EL CANTON DE SAN PABLO',
                'code' => '27135',
                'department_id' => 12
            ],
            [
                'name' => 'CARMEN DEL DARIEN',
                'code' => '27150',
                'department_id' => 12
            ],
            [
                'name' => 'CERTEGUI',
                'code' => '27160',
                'department_id' => 12
            ],
            [
                'name' => 'CONDOTO',
                'code' => '27205',
                'department_id' => 12
            ],
            [
                'name' => 'EL CARMEN DE ATRATO',
                'code' => '27245',
                'department_id' => 12
            ],
            [
                'name' => 'EL LITORAL DE SAN JUAN',
                'code' => '27250',
                'department_id' => 12
            ],
            [
                'name' => 'ISTMINA',
                'code' => '27361',
                'department_id' => 12
            ],
            [
                'name' => 'JURADO',
                'code' => '27372',
                'department_id' => 12
            ],
            [
                'name' => 'LLORO',
                'code' => '27413',
                'department_id' => 12
            ],
            [
                'name' => 'MEDIO ATRATO',
                'code' => '27425',
                'department_id' => 12
            ],
            [
                'name' => 'MEDIO BAUDO',
                'code' => '27430',
                'department_id' => 12
            ],
            [
                'name' => 'MEDIO SAN JUAN',
                'code' => '27450',
                'department_id' => 12
            ],
            [
                'name' => 'NOVITA',
                'code' => '27491',
                'department_id' => 12
            ],
            [
                'name' => 'NUQUI',
                'code' => '27495',
                'department_id' => 12
            ],
            [
                'name' => 'RIO IRO',
                'code' => '27580',
                'department_id' => 12
            ],
            [
                'name' => 'RIO QUITO',
                'code' => '27600',
                'department_id' => 12
            ],
            [
                'name' => 'RIO SUCIO',
                'code' => '27615',
                'department_id' => 12
            ],
            [
                'name' => 'SAN JOSE DEL PALMAR',
                'code' => '27660',
                'department_id' => 12
            ],
            [
                'name' => 'SIPI',
                'code' => '27745',
                'department_id' => 12
            ],
            [
                'name' => 'TADO',
                'code' => '27787',
                'department_id' => 12
            ],
            [
                'name' => 'UNGUIA',
                'code' => '27800',
                'department_id' => 12
            ],
            [
                'name' => 'UNION PANAMERICANA',
                'code' => '27810',
                'department_id' => 12
            ],
            [
                'name' => 'NEIVA',
                'code' => '41001',
                'department_id' => 13
            ],
            [
                'name' => 'ACEVEDO',
                'code' => '41006',
                'department_id' => 13
            ],
            [
                'name' => 'AGRADO',
                'code' => '41013',
                'department_id' => 13
            ],
            [
                'name' => 'AIPE',
                'code' => '41016',
                'department_id' => 13
            ],
            [
                'name' => 'ALGECIRAS',
                'code' => '41020',
                'department_id' => 13
            ],
            [
                'name' => 'ALTAMIRA',
                'code' => '41026',
                'department_id' => 13
            ],
            [
                'name' => 'BARAYA',
                'code' => '41078',
                'department_id' => 13
            ],
            [
                'name' => 'ACAMPOALEGRE',
                'code' => '41132',
                'department_id' => 13
            ],
            [
                'name' => 'COLOMBIA',
                'code' => '41206',
                'department_id' => 13
            ],
            [
                'name' => 'ELIAS',
                'code' => '41244',
                'department_id' => 13
            ],
            [
                'name' => 'GARZON',
                'code' => '41298',
                'department_id' => 13
            ],
            [
                'name' => 'GIGANTE',
                'code' => '41306',
                'department_id' => 13
            ],
            [
                'name' => 'GUADALUPE',
                'code' => '41319',
                'department_id' => 13
            ],
            [
                'name' => 'HOBO',
                'code' => '41349',
                'department_id' => 13
            ],
            [
                'name' => 'IQUIRA',
                'code' => '41357',
                'department_id' => 13
            ],
            [
                'name' => 'ISNOS',
                'code' => '41359',
                'department_id' => 13
            ],
            [
                'name' => 'LA ARGENTINA',
                'code' => '41378',
                'department_id' => 13
            ],
            [
                'name' => 'LA PLATA',
                'code' => '41396',
                'department_id' => 13
            ],
            [
                'name' => 'NATAGA',
                'code' => '41483',
                'department_id' => 13
            ],
            [
                'name' => 'OPORAPA',
                'code' => '41503',
                'department_id' => 13
            ],
            [
                'name' => 'PAICOL',
                'code' => '41518',
                'department_id' => 13
            ],
            [
                'name' => 'PALERMO',
                'code' => '41524',
                'department_id' => 13
            ],
            [
                'name' => 'PALESTINA',
                'code' => '41530',
                'department_id' => 13
            ],
            [
                'name' => 'PITAL',
                'code' => '41548',
                'department_id' => 13
            ],
            [
                'name' => 'PITALITO',
                'code' => '41551',
                'department_id' => 13
            ],
            [
                'name' => 'RIVERA',
                'code' => '41615',
                'department_id' => 13
            ],
            [
                'name' => 'SALADOBLANCO',
                'code' => '41660',
                'department_id' => 13
            ],
            [
                'name' => 'SAN AGUSTIN',
                'code' => '41668',
                'department_id' => 13
            ],
            [
                'name' => 'santa maria',
                'code' => '41676',
                'department_id' => 13
            ],
            [
                'name' => 'SUAZA',
                'code' => '41770',
                'department_id' => 13
            ],
            [
                'name' => 'TARQUI',
                'code' => '41791',
                'department_id' => 13
            ],
            [
                'name' => 'TESALIA',
                'code' => '41797',
                'department_id' => 13
            ],
            [
                'name' => 'TELLO',
                'code' => '41799',
                'department_id' => 13
            ],
            [
                'name' => 'TERUEL',
                'code' => '41801',
                'department_id' => 13
            ],
            [
                'name' => 'TIMANA',
                'code' => '41807',
                'department_id' => 13
            ],
            [
                'name' => 'VILLAVIEJA',
                'code' => '41872',
                'department_id' => 13
            ],
            [
                'name' => 'YAGUARA',
                'code' => '41885',
                'department_id' => 13
            ],
            [
                'name' => 'RIOHACHA',
                'code' => '44001',
                'department_id' => 14
            ],
            [
                'name' => 'ALBANIA',
                'code' => '44035',
                'department_id' => 14
            ],
            [
                'name' => 'BARRANCAS',
                'code' => '44078',
                'department_id' => 14
            ],
            [
                'name' => 'DIBULLA',
                'code' => '44090',
                'department_id' => 14
            ],
            [
                'name' => 'DISTRACCION',
                'code' => '44098',
                'department_id' => 14
            ],
            [
                'name' => 'EL MOLINO',
                'code' => '44110',
                'department_id' => 14
            ],
            [
                'name' => 'FONSECA',
                'code' => '44279',
                'department_id' => 14
            ],
            [
                'name' => 'HATONUEVO',
                'code' => '44378',
                'department_id' => 14
            ],
            [
                'name' => 'LA JAGUA DEL PILAR',
                'code' => '44420',
                'department_id' => 14
            ],
            [
                'name' => 'MAICAO',
                'code' => '44430',
                'department_id' => 14
            ],
            [
                'name' => 'MANAURE',
                'code' => '44560',
                'department_id' => 14
            ],
            [
                'name' => 'SAN JUAN DEL CESAR',
                'code' => '44650',
                'department_id' => 14
            ],
            [
                'name' => 'URIBIA',
                'code' => '44847',
                'department_id' => 14
            ],
            [
                'name' => 'URUMITA',
                'code' => '44855',
                'department_id' => 14
            ],
            [
                'name' => 'VILLANUEVA',
                'code' => '44874',
                'department_id' => 14
            ],
            [
                'name' => 'SANTA MARTA',
                'code' => '47001',
                'department_id' => 15
            ],
            [
                'name' => 'ALGARROBO',
                'code' => '47030',
                'department_id' => 15
            ],
            [
                'name' => 'ARACATACA',
                'code' => '47053',
                'department_id' => 15
            ],
            [
                'name' => 'ARIGUANI',
                'code' => '47058',
                'department_id' => 15
            ],
            [
                'name' => 'CERRO SAN ANTONIO',
                'code' => '47161',
                'department_id' => 15
            ],
            [
                'name' => 'CHIBOLO',
                'code' => '47170',
                'department_id' => 15
            ],
            [
                'name' => 'CIENEGA',
                'code' => '47189',
                'department_id' => 15
            ],
            [
                'name' => 'CONCORDIA',
                'code' => '47205',
                'department_id' => 15
            ],
            [
                'name' => 'EL BANCO',
                'code' => '47245',
                'department_id' => 15
            ],
            [
                'name' => 'EL PIÑON',
                'code' => '47258',
                'department_id' => 15
            ],
            [
                'name' => 'EL RETEN',
                'code' => '47268',
                'department_id' => 15
            ],
            [
                'name' => 'FUNDACION',
                'code' => '47288',
                'department_id' => 15
            ],
            [
                'name' => 'GUAMAL',
                'code' => '47318',
                'department_id' => 15
            ],
            [
                'name' => 'NUEVA GRANADA',
                'code' => '47460',
                'department_id' => 15
            ],
            [
                'name' => 'PEDRAZA',
                'code' => '47541',
                'department_id' => 15
            ],
            [
                'name' => 'PIJIÑO DEL CARMEN',
                'code' => '47545',
                'department_id' => 15
            ],
            [
                'name' => 'PIVIJAY',
                'code' => '47551',
                'department_id' => 15
            ],
            [
                'name' => 'PLATO',
                'code' => '47555',
                'department_id' => 15
            ],
            [
                'name' => 'PUEBLOVIEJO',
                'code' => '47570',
                'department_id' => 15
            ],
            [
                'name' => 'REMOLINO',
                'code' => '47605',
                'department_id' => 15
            ],
            [
                'name' => 'SABANAS DE SAN MIGUEL',
                'code' => '47660',
                'department_id' => 15
            ],
            [
                'name' => 'SALAMINA',
                'code' => '47675',
                'department_id' => 15
            ],
            [
                'name' => 'SAN SEBASTIAN DE BUENA VISTA',
                'code' => '47692',
                'department_id' => 15
            ],
            [
                'name' => 'SAN ZENON',
                'code' => '47703',
                'department_id' => 15
            ],
            [
                'name' => 'SANTA ANA',
                'code' => '47707',
                'department_id' => 15
            ],
            [
                'name' => 'SANTA BARBARA DE PINTO',
                'code' => '47720',
                'department_id' => 15
            ],
            [
                'name' => 'SITIO NUEVO',
                'code' => '47745',
                'department_id' => 15
            ],
            [
                'name' => 'TENERIFE',
                'code' => '47798',
                'department_id' => 15
            ],
            [
                'name' => 'ZAPAYAN',
                'code' => '47960',
                'department_id' => 15
            ],
            [
                'name' => 'ZONA BANANERA',
                'code' => '47980',
                'department_id' => 15
            ],
            [
                'name' => 'VILLAVICENCIO',
                'code' => '50001',
                'department_id' => 16
            ],
            [
                'name' => 'ACACIAS',
                'code' => '50006',
                'department_id' => 16
            ],
            [
                'name' => 'BARRANCA DE UPIA',
                'code' => '50110',
                'department_id' => 16
            ],
            [
                'name' => 'CABUYARO',
                'code' => '50124',
                'department_id' => 16
            ],
            [
                'name' => 'CASTILLA LA NUEVA',
                'code' => '50150',
                'department_id' => 16
            ],
            [
                'name' => 'CUBARRAL',
                'code' => '50223',
                'department_id' => 16
            ],
            [
                'name' => 'CUMARAL',
                'code' => '50226',
                'department_id' => 16
            ],
            [
                'name' => 'EL CALVARIO',
                'code' => '50245',
                'department_id' => 16
            ],
            [
                'name' => 'EL CASTILLO',
                'code' => '50251',
                'department_id' => 16
            ],
            [
                'name' => 'EL DORADO',
                'code' => '50270',
                'department_id' => 16
            ],
            [
                'name' => 'FUENTE DE ORO',
                'code' => '50287',
                'department_id' => 16
            ],
            [
                'name' => 'GRANADA',
                'code' => '50313',
                'department_id' => 16
            ],
            [
                'name' => 'GUAMAL',
                'code' => '50318',
                'department_id' => 16
            ],
            [
                'name' => 'MAPIRIPAN',
                'code' => '50325',
                'department_id' => 16
            ],
            [
                'name' => 'MESETAS',
                'code' => '50330',
                'department_id' => 16
            ],
            [
                'name' => 'LA MACARENA',
                'code' => '50350',
                'department_id' => 16
            ],
            [
                'name' => 'URIBE',
                'code' => '50370',
                'department_id' => 16
            ],
            [
                'name' => 'LEJANIAS',
                'code' => '50400',
                'department_id' => 16
            ],
            [
                'name' => 'PUERTO CONCORDIA',
                'code' => '50450',
                'department_id' => 16
            ],
            [
                'name' => 'PUERTO GAITAN',
                'code' => '50568',
                'department_id' => 16
            ],
            [
                'name' => 'PUERTO LOPEZ',
                'code' => '50573',
                'department_id' => 16
            ],
            [
                'name' => 'PUERTO LLERAS',
                'code' => '50577',
                'department_id' => 16
            ],
            [
                'name' => 'PUERTO RICO',
                'code' => '50590',
                'department_id' => 16
            ],
            [
                'name' => 'RESTREPO',
                'code' => '50606',
                'department_id' => 16
            ],
            [
                'name' => 'SAN CARLOS DE GUAROA',
                'code' => '50680',
                'department_id' => 16
            ],
            [
                'name' => 'SAN JUAN DE ARAMA',
                'code' => '50683',
                'department_id' => 16
            ],
            [
                'name' => 'SAN JUANITO',
                'code' => '50686',
                'department_id' => 16
            ],
            [
                'name' => 'SAN MARTIN DE LLANOS',
                'code' => '50689',
                'department_id' => 16
            ],
            [
                'name' => 'VISTA HERMOSA',
                'code' => '50711',
                'department_id' => 16
            ],
            [
                'name' => 'PASTO',
                'code' => '52001',
                'department_id' => 17
            ],
            [
                'name' => 'ALBAN',
                'code' => '52019',
                'department_id' => 17
            ],
            [
                'name' => 'ALDANA',
                'code' => '52022',
                'department_id' => 17
            ],
            [
                'name' => 'ANCUYA',
                'code' => '52036',
                'department_id' => 17
            ],
            [
                'name' => 'ARBOLEDA',
                'code' => '52051',
                'department_id' => 17
            ],
            [
                'name' => 'BARBACOAS',
                'code' => '52079',
                'department_id' => 17
            ],
            [
                'name' => 'BELEN',
                'code' => '52083',
                'department_id' => 17
            ],
            [
                'name' => 'BUESACO',
                'code' => '52110',
                'department_id' => 17
            ],
            [
                'name' => 'COLON',
                'code' => '52203',
                'department_id' => 17
            ],
            [
                'name' => 'CONNSACA',
                'code' => '52207',
                'department_id' => 17
            ],
            [
                'name' => 'CONTADERO',
                'code' => '52210',
                'department_id' => 17
            ],
            [
                'name' => 'CORDOBA',
                'code' => '52215',
                'department_id' => 17
            ],
            [
                'name' => 'CUASPUD',
                'code' => '52224',
                'department_id' => 17
            ],
            [
                'name' => 'CUMBAL',
                'code' => '52227',
                'department_id' => 17
            ],
            [
                'name' => 'CUMBITARA',
                'code' => '52233',
                'department_id' => 17
            ],
            [
                'name' => 'CHACHAGUI',
                'code' => '52240',
                'department_id' => 17
            ],
            [
                'name' => 'EL CHARCO',
                'code' => '52250',
                'department_id' => 17
            ],
            [
                'name' => 'EL PEÑOL',
                'code' => '52254',
                'department_id' => 17
            ],
            [
                'name' => 'EL ROSARIO',
                'code' => '52256',
                'department_id' => 17
            ],
            [
                'name' => 'EL TABLON DE GOMEZ',
                'code' => '52258',
                'department_id' => 17
            ],
            [
                'name' => 'EL TAMBO',
                'code' => '52260',
                'department_id' => 17
            ],
            [
                'name' => 'FUNES',
                'code' => '52287',
                'department_id' => 17
            ],
            [
                'name' => 'GUACHUCAL',
                'code' => '52317',
                'department_id' => 17
            ],
            [
                'name' => 'GUAITARILLA',
                'code' => '52320',
                'department_id' => 17
            ],
            [
                'name' => 'GUALMATAN',
                'code' => '52323',
                'department_id' => 17
            ],
            [
                'name' => 'ILES',
                'code' => '52352',
                'department_id' => 17
            ],
            [
                'name' => 'IMUES',
                'code' => '52354',
                'department_id' => 17
            ],
            [
                'name' => 'IPIALES',
                'code' => '52356',
                'department_id' => 17
            ],
            [
                'name' => 'LA CRUZ',
                'code' => '52378',
                'department_id' => 17
            ],
            [
                'name' => 'LA FLORIDA',
                'code' => '52381',
                'department_id' => 17
            ],
            [
                'name' => 'LA LLANADA',
                'code' => '52385',
                'department_id' => 17
            ],
            [
                'name' => 'LA TOLA',
                'code' => '52390',
                'department_id' => 17
            ],
            [
                'name' => 'LA UNION',
                'code' => '52399',
                'department_id' => 17
            ],
            [
                'name' => 'LEIVA',
                'code' => '52405',
                'department_id' => 17
            ],
            [
                'name' => 'LINARES',
                'code' => '52411',
                'department_id' => 17
            ],
            [
                'name' => 'LOS ANDES',
                'code' => '52418',
                'department_id' => 17
            ],
            [
                'name' => 'MAGUI',
                'code' => '52427',
                'department_id' => 17
            ],
            [
                'name' => 'MALLAMA',
                'code' => '52435',
                'department_id' => 17
            ],
            [
                'name' => 'MOSQUERA',
                'code' => '52473',
                'department_id' => 17
            ],
            [
                'name' => 'NARIÑO',
                'code' => '52480',
                'department_id' => 17
            ],
            [
                'name' => 'OLAYA HERRERA',
                'code' => '52490',
                'department_id' => 17
            ],
            [
                'name' => 'OSPINA',
                'code' => '52506',
                'department_id' => 17
            ],
            [
                'name' => 'FRANCISCO PIZARRO',
                'code' => '52520',
                'department_id' => 17
            ],
            [
                'name' => 'POLICARPA',
                'code' => '52540',
                'department_id' => 17
            ],
            [
                'name' => 'POTOSI',
                'code' => '52560',
                'department_id' => 17
            ],
            [
                'name' => 'PROVIDENCIA',
                'code' => '52565',
                'department_id' => 17
            ],
            [
                'name' => 'PUERRES',
                'code' => '52573',
                'department_id' => 17
            ],
            [
                'name' => 'PUPIALES',
                'code' => '52585',
                'department_id' => 17
            ],
            [
                'name' => 'RICAURTE',
                'code' => '52612',
                'department_id' => 17
            ],
            [
                'name' => 'ROBERTO PAYAN',
                'code' => '52621',
                'department_id' => 17
            ],
            [
                'name' => 'SAMANIEGO',
                'code' => '52678',
                'department_id' => 17
            ],
            [
                'name' => 'SANDONA',
                'code' => '52683',
                'department_id' => 17
            ],
            [
                'name' => 'SAN BERNARDO',
                'code' => '52685',
                'department_id' => 17
            ],
            [
                'name' => 'SAN LORENZO',
                'code' => '52687',
                'department_id' => 17
            ],
            [
                'name' => 'SAN PABLO',
                'code' => '52693',
                'department_id' => 17
            ],
            [
                'name' => 'SAN PEDRO DE CARTAGO',
                'code' => '52694',
                'department_id' => 17
            ],
            [
                'name' => 'SANTA BARBARA',
                'code' => '52696',
                'department_id' => 17
            ],
            [
                'name' => 'SANTACRUZ',
                'code' => '52699',
                'department_id' => 17
            ],
            [
                'name' => 'SAPUYES',
                'code' => '52720',
                'department_id' => 17
            ],
            [
                'name' => 'TAMINANGO',
                'code' => '52786',
                'department_id' => 17
            ],
            [
                'name' => 'TANGUA',
                'code' => '52788',
                'department_id' => 17
            ],
            [
                'name' => 'SAN ANDRES DE TUMACO',
                'code' => '52835',
                'department_id' => 17
            ],
            [
                'name' => 'TUQUERRES',
                'code' => '52838',
                'department_id' => 17
            ],
            [
                'name' => 'YACUANQUER',
                'code' => '52885',
                'department_id' => 17
            ],
            [
                'name' => 'CUCUTA',
                'code' => '54001',
                'department_id' => 18
            ],
            [
                'name' => 'ABREGO',
                'code' => '54003',
                'department_id' => 18
            ],
            [
                'name' => 'ARBOLEDAS',
                'code' => '54051',
                'department_id' => 18
            ],
            [
                'name' => 'BOCHALEMA',
                'code' => '54099',
                'department_id' => 18
            ],
            [
                'name' => 'BUCARASICA',
                'code' => '54109',
                'department_id' => 18
            ],
            [
                'name' => 'CACOTA DE VELAZCO',
                'code' => '54125',
                'department_id' => 18
            ],
            [
                'name' => 'CACHIRA',
                'code' => '54128',
                'department_id' => 18
            ],
            [
                'name' => 'CHINACOTA',
                'code' => '54172',
                'department_id' => 18
            ],
            [
                'name' => 'CHITAGA',
                'code' => '54174',
                'department_id' => 18
            ],
            [
                'name' => 'CONVENCION',
                'code' => '54206',
                'department_id' => 18
            ],
            [
                'name' => 'CUCUTILLA',
                'code' => '54223',
                'department_id' => 18
            ],
            [
                'name' => 'DURANIA',
                'code' => '54239',
                'department_id' => 18
            ],
            [
                'name' => 'EL CARMEN',
                'code' => '54245',
                'department_id' => 18
            ],
            [
                'name' => 'EL TARRA',
                'code' => '54250',
                'department_id' => 18
            ],
            [
                'name' => 'EL ZULIA',
                'code' => '54261',
                'department_id' => 18
            ],
            [
                'name' => 'GRAMALOTE',
                'code' => '54313',
                'department_id' => 18
            ],
            [
                'name' => 'HACARI',
                'code' => '54344',
                'department_id' => 18
            ],
            [
                'name' => 'HERRAN',
                'code' => '54347',
                'department_id' => 18
            ],
            [
                'name' => 'LABATECA',
                'code' => '54377',
                'department_id' => 18
            ],
            [
                'name' => 'LA ESPERANZA',
                'code' => '54385',
                'department_id' => 18
            ],
            [
                'name' => 'LA PLAYA DE BELEN',
                'code' => '54398',
                'department_id' => 18
            ],
            [
                'name' => 'LOS PATIOS',
                'code' => '54405',
                'department_id' => 18
            ],
            [
                'name' => 'LOURDES',
                'code' => '54418',
                'department_id' => 18
            ],
            [
                'name' => 'MUTISCUA',
                'code' => '54480',
                'department_id' => 18
            ],
            [
                'name' => 'OCAÑA',
                'code' => '54498',
                'department_id' => 18
            ],
            [
                'name' => 'PAMPLONA',
                'code' => '54518',
                'department_id' => 18
            ],
            [
                'name' => 'PAMPLONITA',
                'code' => '54520',
                'department_id' => 18
            ],
            [
                'name' => 'PUERTO SANTANDER',
                'code' => '54553',
                'department_id' => 18
            ],
            [
                'name' => 'RAGONVALIA',
                'code' => '54599',
                'department_id' => 18
            ],
            [
                'name' => 'SALAZAR DE LAS PALMAS',
                'code' => '54660',
                'department_id' => 18
            ],
            [
                'name' => 'SAN CALIXTO',
                'code' => '54670',
                'department_id' => 18
            ],
            [
                'name' => 'SAN CAYETANO',
                'code' => '54673',
                'department_id' => 18
            ],
            [
                'name' => 'SANTIAGO',
                'code' => '54680',
                'department_id' => 18
            ],
            [
                'name' => 'SARDINATA',
                'code' => '54720',
                'department_id' => 18
            ],
            [
                'name' => 'SANTO DOMINDO DE SILOS',
                'code' => '54743',
                'department_id' => 18
            ],
            [
                'name' => 'TEORAMA',
                'code' => '54800',
                'department_id' => 18
            ],
            [
                'name' => 'TIBU',
                'code' => '54810',
                'department_id' => 18
            ],
            [
                'name' => 'TOLEDO',
                'code' => '54820',
                'department_id' => 18
            ],
            [
                'name' => 'VILLA CARO',
                'code' => '54871',
                'department_id' => 18
            ],
            [
                'name' => 'VILLA DEL ROSARIO',
                'code' => '54874',
                'department_id' => 18
            ],
            [
                'name' => 'ARMENIA',
                'code' => '63001',
                'department_id' => 19
            ],
            [
                'name' => 'BUENAVISTA',
                'code' => '63111',
                'department_id' => 19
            ],
            [
                'name' => 'CALARCA',
                'code' => '63130',
                'department_id' => 19
            ],
            [
                'name' => 'CIRCASIA',
                'code' => '63190',
                'department_id' => 19
            ],
            [
                'name' => 'CORDOBA',
                'code' => '63212',
                'department_id' => 19
            ],
            [
                'name' => 'FILANDIA',
                'code' => '63272',
                'department_id' => 19
            ],
            [
                'name' => 'GENOVA',
                'code' => '63302',
                'department_id' => 19
            ],
            [
                'name' => 'LA TEBAIDA',
                'code' => '63401',
                'department_id' => 19
            ],
            [
                'name' => 'MONTENEGRO',
                'code' => '63470',
                'department_id' => 19
            ],
            [
                'name' => 'PIJAO',
                'code' => '63548',
                'department_id' => 19
            ],
            [
                'name' => 'QUIMBAYA',
                'code' => '63594',
                'department_id' => 19
            ],
            [
                'name' => 'SALENTO',
                'code' => '63690',
                'department_id' => 19
            ],
            [
                'name' => 'PEREIRA',
                'code' => '66001',
                'department_id' => 20
            ],
            [
                'name' => 'APIA',
                'code' => '66045',
                'department_id' => 20
            ],
            [
                'name' => 'BALBOA',
                'code' => '66075',
                'department_id' => 20
            ],
            [
                'name' => 'BELEN DE UMBRIA',
                'code' => '66088',
                'department_id' => 20
            ],
            [
                'name' => 'DOSQUEBRADAS',
                'code' => '66170',
                'department_id' => 20
            ],
            [
                'name' => 'GUATICA',
                'code' => '66318',
                'department_id' => 20
            ],
            [
                'name' => 'LA CELIA',
                'code' => '66383',
                'department_id' => 20
            ],
            [
                'name' => 'LA VIRGINIA',
                'code' => '66400',
                'department_id' => 20
            ],
            [
                'name' => 'MARSELLA',
                'code' => '66440',
                'department_id' => 20
            ],
            [
                'name' => 'MISTRATO',
                'code' => '66456',
                'department_id' => 20
            ],
            [
                'name' => 'PUEBLO RICO',
                'code' => '66572',
                'department_id' => 20
            ],
            [
                'name' => 'QUINCHIA',
                'code' => '66594',
                'department_id' => 20
            ],
            [
                'name' => 'SANTA ROSA DE CABAL',
                'code' => '66682',
                'department_id' => 20
            ],
            [
                'name' => 'SANTUARIO',
                'code' => '66687',
                'department_id' => 20
            ],
            [
                'name' => 'BUCARAMANGA',
                'code' => '68001',
                'department_id' => 21
            ],
            [
                'name' => 'AGUADA',
                'code' => '68013',
                'department_id' => 21
            ],
            [
                'name' => 'ALBANIA',
                'code' => '68020',
                'department_id' => 21
            ],
            [
                'name' => 'ARATOCA',
                'code' => '68051',
                'department_id' => 21
            ],
            [
                'name' => 'BARBOSA',
                'code' => '68077',
                'department_id' => 21
            ],
            [
                'name' => 'BARICHARA',
                'code' => '68079',
                'department_id' => 21
            ],
            [
                'name' => 'BARRANCABERMEJA',
                'code' => '68081',
                'department_id' => 21
            ],
            [
                'name' => 'BETULIA',
                'code' => '68092',
                'department_id' => 21
            ],
            [
                'name' => 'BOLIVAR',
                'code' => '68101',
                'department_id' => 21
            ],
            [
                'name' => 'CABRERA',
                'code' => '68121',
                'department_id' => 21
            ],
            [
                'name' => 'CALIFORNIA',
                'code' => '68132',
                'department_id' => 21
            ],
            [
                'name' => 'CAPITANEJO',
                'code' => '68147',
                'department_id' => 21
            ],
            [
                'name' => 'CARCASI',
                'code' => '68152',
                'department_id' => 21
            ],
            [
                'name' => 'CEPITA',
                'code' => '68160',
                'department_id' => 21
            ],
            [
                'name' => 'CERRITO',
                'code' => '68162',
                'department_id' => 21
            ],
            [
                'name' => 'CHARALA',
                'code' => '68167',
                'department_id' => 21
            ],
            [
                'name' => 'CHARTA',
                'code' => '68169',
                'department_id' => 21
            ],
            [
                'name' => 'CHIMA',
                'code' => '68176',
                'department_id' => 21
            ],
            [
                'name' => 'CHIPATA',
                'code' => '68179',
                'department_id' => 21
            ],
            [
                'name' => 'CIMITARRA',
                'code' => '68001',
                'department_id' => 21
            ],
            [
                'name' => 'CONCEPCION',
                'code' => '68207',
                'department_id' => 21
            ],
            [
                'name' => 'CONFINES',
                'code' => '68209',
                'department_id' => 21
            ],
            [
                'name' => 'CONTRATACION',
                'code' => '68211',
                'department_id' => 21
            ],
            [
                'name' => 'COROMORO',
                'code' => '68217',
                'department_id' => 21
            ],
            [
                'name' => 'CURITI',
                'code' => '68229',
                'department_id' => 21
            ],
            [
                'name' => 'EL CARMEN DE CHUCURI',
                'code' => '68235',
                'department_id' => 21
            ],
            [
                'name' => 'EL GUACAMAYO',
                'code' => '68245',
                'department_id' => 21
            ],
            [
                'name' => 'EL PEÑON',
                'code' => '68250',
                'department_id' => 21
            ],
            [
                'name' => 'EL PLAYON',
                'code' => '68255',
                'department_id' => 21
            ],
            [
                'name' => 'ENCINO',
                'code' => '68264',
                'department_id' => 21
            ],
            [
                'name' => 'ENCISO',
                'code' => '68266',
                'department_id' => 21
            ],
            [
                'name' => 'FLORIAN',
                'code' => '68271',
                'department_id' => 21
            ],
            [
                'name' => 'FLORIDABLANCA',
                'code' => '68276',
                'department_id' => 21
            ],
            [
                'name' => 'GALAN',
                'code' => '68296',
                'department_id' => 21
            ],
            [
                'name' => 'GAMBITA',
                'code' => '68298',
                'department_id' => 21
            ],
            [
                'name' => 'GIRON',
                'code' => '68307',
                'department_id' => 21
            ],
            [
                'name' => 'GUACA',
                'code' => '68318',
                'department_id' => 21
            ],
            [
                'name' => 'GUADALUPE',
                'code' => '68320',
                'department_id' => 21
            ],
            [
                'name' => 'GUAPOTA',
                'code' => '68322',
                'department_id' => 21
            ],
            [
                'name' => 'GUAVATA',
                'code' => '68324',
                'department_id' => 21
            ],
            [
                'name' => 'GUEPSA',
                'code' => '68327',
                'department_id' => 21
            ],
            [
                'name' => 'HATO',
                'code' => '68344',
                'department_id' => 21
            ],
            [
                'name' => 'JESUS MARIA',
                'code' => '68368',
                'department_id' => 21
            ],
            [
                'name' => 'JORDAN',
                'code' => '68370',
                'department_id' => 21
            ],
            [
                'name' => 'LA BELLEZA',
                'code' => '68377',
                'department_id' => 21
            ],
            [
                'name' => 'LANDAZURI',
                'code' => '68385',
                'department_id' => 21
            ],
            [
                'name' => 'LA PAZ',
                'code' => '68397',
                'department_id' => 21
            ],
            [
                'name' => 'LEBRIJA',
                'code' => '68406',
                'department_id' => 21
            ],
            [
                'name' => 'LOS SANTOS',
                'code' => '68418',
                'department_id' => 21
            ],
            [
                'name' => 'MACARAVITA',
                'code' => '68425',
                'department_id' => 21
            ],
            [
                'name' => 'MALAGA',
                'code' => '68432',
                'department_id' => 21
            ],
            [
                'name' => 'MATANZA',
                'code' => '68444',
                'department_id' => 21
            ],
            [
                'name' => 'MOGOTES',
                'code' => '68464',
                'department_id' => 21
            ],
            [
                'name' => 'MOLAGAVITA',
                'code' => '68468',
                'department_id' => 21
            ],
            [
                'name' => 'OCAMONTE',
                'code' => '68498',
                'department_id' => 21
            ],
            [
                'name' => 'OIBA',
                'code' => '68500',
                'department_id' => 21
            ],
            [
                'name' => 'ONZAGA',
                'code' => '68502',
                'department_id' => 21
            ],
            [
                'name' => 'PALMAR',
                'code' => '68522',
                'department_id' => 21
            ],
            [
                'name' => 'PALMAS DEL SOCORRO',
                'code' => '68524',
                'department_id' => 21
            ],
            [
                'name' => 'PARAMO',
                'code' => '68533',
                'department_id' => 21
            ],
            [
                'name' => 'PIEDECUESTA',
                'code' => '68547',
                'department_id' => 21
            ],
            [
                'name' => 'PINCHOTE',
                'code' => '68549',
                'department_id' => 21
            ],
            [
                'name' => 'PUENTE NACIONAL',
                'code' => '68572',
                'department_id' => 21
            ],
            [
                'name' => 'PUERTO PARRA',
                'code' => '68573',
                'department_id' => 21
            ],
            [
                'name' => 'PUERTO WILCHES',
                'code' => '68575',
                'department_id' => 21
            ],
            [
                'name' => 'RIONEGRO',
                'code' => '68615',
                'department_id' => 21
            ],
            [
                'name' => 'SABANA DE TORRES',
                'code' => '68655',
                'department_id' => 21
            ],
            [
                'name' => 'SAN ANDRES',
                'code' => '68669',
                'department_id' => 21
            ],
            [
                'name' => 'SAN BENITO',
                'code' => '68673',
                'department_id' => 21
            ],
            [
                'name' => 'SAN GIL',
                'code' => '68679',
                'department_id' => 21
            ],
            [
                'name' => 'SAN JOAQUIN',
                'code' => '68682',
                'department_id' => 21
            ],
            [
                'name' => 'SAN JOSE DE MIRANDA',
                'code' => '68684',
                'department_id' => 21
            ],
            [
                'name' => 'SAN MIGUEL',
                'code' => '68686',
                'department_id' => 21
            ],
            [
                'name' => 'SAN VICENTE DE CHUCURI',
                'code' => '68689',
                'department_id' => 21
            ],
            [
                'name' => 'SANTA BARBARA',
                'code' => '68705',
                'department_id' => 21
            ],
            [
                'name' => 'SANTA HELENA DEL OPON',
                'code' => '68720',
                'department_id' => 21
            ],
            [
                'name' => 'SIMACOTA',
                'code' => '68745',
                'department_id' => 21
            ],
            [
                'name' => 'SOCORRO',
                'code' => '68755',
                'department_id' => 21
            ],
            [
                'name' => 'SUAITA',
                'code' => '68770',
                'department_id' => 21
            ],
            [
                'name' => 'SUCRE',
                'code' => '68773',
                'department_id' => 21
            ],
            [
                'name' => 'SURATA',
                'code' => '68780',
                'department_id' => 21
            ],
            [
                'name' => 'TONA',
                'code' => '68820',
                'department_id' => 21
            ],
            [
                'name' => 'VALLE DE SAN JOSE',
                'code' => '68855',
                'department_id' => 21
            ],
            [
                'name' => 'VELEZ',
                'code' => '68861',
                'department_id' => 21
            ],
            [
                'name' => 'VETAS',
                'code' => '68867',
                'department_id' => 21
            ],
            [
                'name' => 'VILLANUEVA',
                'code' => '68872',
                'department_id' => 21
            ],
            [
                'name' => 'ZAPATOCA',
                'code' => '68895',
                'department_id' => 21
            ],
            [
                'name' => 'SINCELEJO',
                'code' => '70001',
                'department_id' => 22
            ],
            [
                'name' => 'BUENAVISTA',
                'code' => '70110',
                'department_id' => 22
            ],
            [
                'name' => 'CAIMITO',
                'code' => '70124',
                'department_id' => 22
            ],
            [
                'name' => 'COLOSO',
                'code' => '70204',
                'department_id' => 22
            ],
            [
                'name' => 'COROZAL',
                'code' => '70215',
                'department_id' => 22
            ],
            [
                'name' => 'COVEÑAS',
                'code' => '70221',
                'department_id' => 22
            ],
            [
                'name' => 'CHALAN',
                'code' => '70230',
                'department_id' => 22
            ],
            [
                'name' => 'EL ROBLE',
                'code' => '70233',
                'department_id' => 22
            ],
            [
                'name' => 'GALERAS',
                'code' => '70235',
                'department_id' => 22
            ],
            [
                'name' => 'GUARANDA',
                'code' => '70265',
                'department_id' => 22
            ],
            [
                'name' => 'LA UNION',
                'code' => '70400',
                'department_id' => 22
            ],
            [
                'name' => 'LOS PALMITOS',
                'code' => '70418',
                'department_id' => 22
            ],
            [
                'name' => 'MAJAGUAL',
                'code' => '70429',
                'department_id' => 22
            ],
            [
                'name' => 'MORROA',
                'code' => '70473',
                'department_id' => 22
            ],
            [
                'name' => 'OVEJAS',
                'code' => '70508',
                'department_id' => 22
            ],
            [
                'name' => 'PALMITO',
                'code' => '70523',
                'department_id' => 22
            ],
            [
                'name' => 'SAMPUES',
                'code' => '70670',
                'department_id' => 22
            ],
            [
                'name' => 'SAN BENITO ABAD',
                'code' => '70678',
                'department_id' => 22
            ],
            [
                'name' => 'SAN JUAN DE BETULIA',
                'code' => '70702',
                'department_id' => 22
            ],
            [
                'name' => 'SAN MARCOS',
                'code' => '70708',
                'department_id' => 22
            ],
            [
                'name' => 'SAN ONOFRE',
                'code' => '70713',
                'department_id' => 22
            ],
            [
                'name' => 'SAN PEDRO',
                'code' => '70717',
                'department_id' => 22
            ],
            [
                'name' => 'SAN LUIS DE SINCE',
                'code' => '70742',
                'department_id' => 22
            ],
            [
                'name' => 'SUCRE',
                'code' => '70771',
                'department_id' => 22
            ],
            [
                'name' => 'SANTIAGO DE TOLU',
                'code' => '70820',
                'department_id' => 22
            ],
            [
                'name' => 'TOLU VIEJO',
                'code' => '70823',
                'department_id' => 22
            ],
            [
                'name' => 'IBAGUE',
                'code' => '73001',
                'department_id' => 23
            ],
            [
                'name' => 'ALPUJARRA',
                'code' => '73024',
                'department_id' => 23
            ],
            [
                'name' => 'ALVARADO',
                'code' => '73026',
                'department_id' => 23
            ],
            [
                'name' => 'ALBALEMA',
                'code' => '73030',
                'department_id' => 23
            ],
            [
                'name' => 'ANZOATEGUI',
                'code' => '73043',
                'department_id' => 23
            ],
            [
                'name' => 'ARMERO',
                'code' => '73055',
                'department_id' => 23
            ],
            [
                'name' => 'ATACO',
                'code' => '73067',
                'department_id' => 23
            ],
            [
                'name' => 'CAJAMARCA',
                'code' => '73124',
                'department_id' => 23
            ],
            [
                'name' => 'CARMEN DE APICALA',
                'code' => '73148',
                'department_id' => 23
            ],
            [
                'name' => 'CASABIANCA',
                'code' => '73152',
                'department_id' => 23
            ],
            [
                'name' => 'CHAPARRAL',
                'code' => '73168',
                'department_id' => 23
            ],
            [
                'name' => 'COELLO',
                'code' => '73200',
                'department_id' => 23
            ],
            [
                'name' => 'COYAIMA',
                'code' => '73217',
                'department_id' => 23
            ],
            [
                'name' => 'CUNDAY',
                'code' => '73226',
                'department_id' => 23
            ],
            [
                'name' => 'DOLORES',
                'code' => '73236',
                'department_id' => 23
            ],
            [
                'name' => 'ESPINAL',
                'code' => '73268',
                'department_id' => 23
            ],
            [
                'name' => 'FALAN',
                'code' => '73270',
                'department_id' => 23
            ],
            [
                'name' => 'FLANDES',
                'code' => '73275',
                'department_id' => 23
            ],
            [
                'name' => 'FRESNO',
                'code' => '73283',
                'department_id' => 23
            ],
            [
                'name' => 'GUAMO',
                'code' => '73319',
                'department_id' => 23
            ],
            [
                'name' => 'HERVEO',
                'code' => '73347',
                'department_id' => 23
            ],
            [
                'name' => 'HONDA',
                'code' => '73349',
                'department_id' => 23
            ],
            [
                'name' => 'ICONONZO',
                'code' => '73352',
                'department_id' => 23
            ],
            [
                'name' => 'LERIDA',
                'code' => '73408',
                'department_id' => 23
            ],
            [
                'name' => 'LIBANO',
                'code' => '73411',
                'department_id' => 23
            ],
            [
                'name' => 'SAN SEBASTIAN DE MARIQUITA',
                'code' => '73443',
                'department_id' => 23
            ],
            [
                'name' => 'MELGAR',
                'code' => '73449',
                'department_id' => 23
            ],
            [
                'name' => 'MURILLO',
                'code' => '73461',
                'department_id' => 23
            ],
            [
                'name' => 'NATAGAIMA',
                'code' => '73483',
                'department_id' => 23
            ],
            [
                'name' => 'ORTEGA',
                'code' => '73504',
                'department_id' => 23
            ],
            [
                'name' => 'PALOCABILDO',
                'code' => '73520',
                'department_id' => 23
            ],
            [
                'name' => 'PIEDRAS',
                'code' => '73547',
                'department_id' => 23
            ],
            [
                'name' => 'PLANADAS',
                'code' => '73555',
                'department_id' => 23
            ],
            [
                'name' => 'PRADO',
                'code' => '73563',
                'department_id' => 23
            ],
            [
                'name' => 'PURIFICACION',
                'code' => '73585',
                'department_id' => 23
            ],
            [
                'name' => 'RIOBLANCO',
                'code' => '73616',
                'department_id' => 23
            ],
            [
                'name' => 'RONCESVALLES',
                'code' => '73622',
                'department_id' => 23
            ],
            [
                'name' => 'ROBIRA',
                'code' => '73624',
                'department_id' => 23
            ],
            [
                'name' => 'SALDAÑA',
                'code' => '73671',
                'department_id' => 23
            ],
            [
                'name' => 'SAN ANTONIO',
                'code' => '73675',
                'department_id' => 23
            ],
            [
                'name' => 'SAN LUIS',
                'code' => '73678',
                'department_id' => 23
            ],
            [
                'name' => 'SANTA ISABEL',
                'code' => '73686',
                'department_id' => 23
            ],
            [
                'name' => 'SUAREZ',
                'code' => '73770',
                'department_id' => 23
            ],
            [
                'name' => 'VALLE DE SAN JUAN',
                'code' => '73854',
                'department_id' => 23
            ],
            [
                'name' => 'VENADILLO',
                'code' => '73861',
                'department_id' => 23
            ],
            [
                'name' => 'VILLAHERMOSA',
                'code' => '73870',
                'department_id' => 23
            ],
            [
                'name' => 'VILLARICA',
                'code' => '73873',
                'department_id' => 23
            ],
            [
                'name' => 'CALI',
                'code' => '76001',
                'department_id' => 24
            ],
            [
                'name' => 'ALCALA',
                'code' => '76020',
                'department_id' => 24
            ],
            [
                'name' => 'ANDALUCIA',
                'code' => '76036',
                'department_id' => 24
            ],
            [
                'name' => 'ANSERMANUEVO',
                'code' => '76041',
                'department_id' => 24
            ],
            [
                'name' => 'ARGELIA',
                'code' => '76054',
                'department_id' => 24
            ],
            [
                'name' => 'BOLIVAR',
                'code' => '76100',
                'department_id' => 24
            ],
            [
                'name' => 'BUENAVENTURA',
                'code' => '76109',
                'department_id' => 24
            ],
            [
                'name' => 'GUADALAJARA DE BUGA',
                'code' => '76111',
                'department_id' => 24
            ],
            [
                'name' => 'BUGALAGRANDE',
                'code' => '76113',
                'department_id' => 24
            ],
            [
                'name' => 'CAICEDONIA',
                'code' => '76122',
                'department_id' => 24
            ],
            [
                'name' => 'CALIMA',
                'code' => '76126',
                'department_id' => 24
            ],
            [
                'name' => 'CANDELARIA',
                'code' => '76130',
                'department_id' => 24
            ],
            [
                'name' => 'CARTAGO',
                'code' => '76147',
                'department_id' => 24
            ],
            [
                'name' => 'DAGUA',
                'code' => '76233',
                'department_id' => 24
            ],
            [
                'name' => 'EL AGUILA',
                'code' => '76243',
                'department_id' => 24
            ],
            [
                'name' => 'EL CAIRO',
                'code' => '76246',
                'department_id' => 24
            ],
            [
                'name' => 'EL CERRITO',
                'code' => '76001',
                'department_id' => 24
            ],
            [
                'name' => 'EL DOVIO',
                'code' => '76250',
                'department_id' => 24
            ],
            [
                'name' => 'FLORIDA',
                'code' => '76275',
                'department_id' => 24
            ],
            [
                'name' => 'GINEBRA',
                'code' => '76306',
                'department_id' => 24
            ],
            [
                'name' => 'GUACARI',
                'code' => '76318',
                'department_id' => 24
            ],
            [
                'name' => 'JAMUNDI',
                'code' => '76364',
                'department_id' => 24
            ],
            [
                'name' => 'LA CUMBRE',
                'code' => '76377',
                'department_id' => 24
            ],
            [
                'name' => 'LA UNION',
                'code' => '76400',
                'department_id' => 24
            ],
            [
                'name' => 'LA VICTORIA',
                'code' => '76403',
                'department_id' => 24
            ],
            [
                'name' => 'OBANDO',
                'code' => '76497',
                'department_id' => 24
            ],
            [
                'name' => 'PALMIRA',
                'code' => '76520',
                'department_id' => 24
            ],
            [
                'name' => 'PRADERA',
                'code' => '76563',
                'department_id' => 24
            ],
            [
                'name' => 'RESTREPO',
                'code' => '76606',
                'department_id' => 24
            ],
            [
                'name' => 'RIOFRIO',
                'code' => '76616',
                'department_id' => 24
            ],
            [
                'name' => 'RONDANILLO',
                'code' => '76622',
                'department_id' => 24
            ],
            [
                'name' => 'SAN PEDRO',
                'code' => '76670',
                'department_id' => 24
            ],
            [
                'name' => 'SEVILLA',
                'code' => '76736',
                'department_id' => 24
            ],
            [
                'name' => 'TORO',
                'code' => '76823',
                'department_id' => 24
            ],
            [
                'name' => 'TRUJILLO',
                'code' => '76828',
                'department_id' => 24
            ],
            [
                'name' => 'TULUA',
                'code' => '76834',
                'department_id' => 24
            ],
            [
                'name' => 'ULLOA',
                'code' => '76845',
                'department_id' => 24
            ],
            [
                'name' => 'VERSALLES',
                'code' => '76863',
                'department_id' => 24
            ],
            [
                'name' => 'VIJES',
                'code' => '76869',
                'department_id' => 24
            ],
            [
                'name' => 'YOTOCO',
                'code' => '76890',
                'department_id' => 24
            ],
            [
                'name' => 'YUMBO',
                'code' => '76892',
                'department_id' => 24
            ],
            [
                'name' => 'ZARZAL',
                'code' => '76895',
                'department_id' => 24
            ],
            [
                'name' => 'ARAUCA',
                'code' => '81001',
                'department_id' => 25
            ],
            [
                'name' => 'ARAUQUITA',
                'code' => '81065',
                'department_id' => 25
            ],
            [
                'name' => 'CRAVO NORTE',
                'code' => '81220',
                'department_id' => 25
            ],
            [
                'name' => 'FORTUL',
                'code' => '81300',
                'department_id' => 25
            ],
            [
                'name' => 'PUERTO RONDON',
                'code' => '81591',
                'department_id' => 25
            ],
            [
                'name' => 'SARAVENA',
                'code' => '81736',
                'department_id' => 25
            ],
            [
                'name' => 'TAME',
                'code' => '81794',
                'department_id' => 25
            ],
            [
                'name' => 'YOPAL',
                'code' => '85001',
                'department_id' => 26
            ],
            [
                'name' => 'AGUAZUL',
                'code' => '85010',
                'department_id' => 26
            ],
            [
                'name' => 'CHAMEZA',
                'code' => '85015',
                'department_id' => 26
            ],
            [
                'name' => 'HATO COROZAL',
                'code' => '85125',
                'department_id' => 26
            ],
            [
                'name' => 'LA SALINA',
                'code' => '85136',
                'department_id' => 26
            ],
            [
                'name' => 'MANI',
                'code' => '85139',
                'department_id' => 26
            ],
            [
                'name' => 'MONTERREY',
                'code' => '85162',
                'department_id' => 26
            ],
            [
                'name' => 'NUNCHIA',
                'code' => '85225',
                'department_id' => 26
            ],
            [
                'name' => 'OROCUE',
                'code' => '85230',
                'department_id' => 26
            ],
            [
                'name' => 'PAZ DE ARIPORO',
                'code' => '85250',
                'department_id' => 26
            ],
            [
                'name' => 'PORE',
                'code' => '85263',
                'department_id' => 26
            ],
            [
                'name' => 'RECETOR',
                'code' => '85279',
                'department_id' => 26
            ],
            [
                'name' => 'SABANALARGA',
                'code' => '85300',
                'department_id' => 26
            ],
            [
                'name' => 'SACAMA',
                'code' => '85315',
                'department_id' => 26
            ],
            [
                'name' => 'SAN LUIS DE PALENQUE',
                'code' => '85325',
                'department_id' => 26
            ],
            [
                'name' => 'TAMARA',
                'code' => '85400',
                'department_id' => 26
            ],
            [
                'name' => 'TAURAMENA',
                'code' => '85410',
                'department_id' => 26
            ],
            [
                'name' => 'TRINIDAD',
                'code' => '85430',
                'department_id' => 26
            ],
            [
                'name' => 'VILLANUEVA',
                'code' => '85440',
                'department_id' => 26
            ],
            [
                'name' => 'MOCOA',
                'code' => '86001',
                'department_id' => 27
            ],
            [
                'name' => 'COLON',
                'code' => '86219',
                'department_id' => 27
            ],
            [
                'name' => 'ORITO',
                'code' => '86320',
                'department_id' => 27
            ],
            [
                'name' => 'PUERTO ASIS',
                'code' => '86568',
                'department_id' => 27
            ],
            [
                'name' => 'PUERTO CAICEDO',
                'code' => '86569',
                'department_id' => 27
            ],
            [
                'name' => 'PUERTO GUZMAN',
                'code' => '86571',
                'department_id' => 27
            ],
            [
                'name' => 'LEGUIZAMO',
                'code' => '86573',
                'department_id' => 27
            ],
            [
                'name' => 'SIBUNDOY',
                'code' => '86749',
                'department_id' => 27
            ],
            [
                'name' => 'SAN FRANCISCO',
                'code' => '86755',
                'department_id' => 27
            ],
            [
                'name' => 'SANMIGUEL',
                'code' => '86757',
                'department_id' => 27
            ],
            [
                'name' => 'SANTIAGO',
                'code' => '86760',
                'department_id' => 27
            ],
            [
                'name' => 'VALLE DE GUAMUEZ',
                'code' => '86865',
                'department_id' => 27
            ],
            [
                'name' => 'VILLAGARZON',
                'code' => '86885',
                'department_id' => 27
            ],
            [
                'name' => 'SAN ANDRES',
                'code' => '88001',
                'department_id' => 28
            ],
            [
                'name' => 'PROVIDENCIA',
                'code' => '88564',
                'department_id' => 28
            ],
            [
                'name' => 'LETICIA',
                'code' => '91001',
                'department_id' => 29
            ],
            [
                'name' => 'EL ENCANTO',
                'code' => '91263',
                'department_id' => 29
            ],
            [
                'name' => 'LA CHORRERA',
                'code' => '91405',
                'department_id' => 29
            ],
            [
                'name' => 'LA PEDRERA',
                'code' => '91407',
                'department_id' => 29
            ],
            [
                'name' => 'LA VICTORIA',
                'code' => '91430',
                'department_id' => 29
            ],
            [
                'name' => 'MIRITI - PARANA',
                'code' => '91460',
                'department_id' => 29
            ],
            [
                'name' => 'PUERTO ALEGRIA',
                'code' => '91530',
                'department_id' => 29
            ],
            [
                'name' => 'PUERTO ARICA',
                'code' => '91536',
                'department_id' => 29
            ],
            [
                'name' => 'PUERTO NARIÑO',
                'code' => '91540',
                'department_id' => 29
            ],
            [
                'name' => 'PUERTO SANTANDER',
                'code' => '91669',
                'department_id' => 29
            ],
            [
                'name' => 'TARAPACA',
                'code' => '91798',
                'department_id' => 29
            ],
            [
                'name' => 'INIRIDA',
                'code' => '94001',
                'department_id' => 30
            ],
            [
                'name' => 'BARRANCO MINAS',
                'code' => '94343',
                'department_id' => 30
            ],
            [
                'name' => 'MAPIRIPANA',
                'code' => '94663',
                'department_id' => 30
            ],
            [
                'name' => 'SAN FELIPE',
                'code' => '94883',
                'department_id' => 30
            ],
            [
                'name' => 'PUERTO COLOMBIA',
                'code' => '94884',
                'department_id' => 30
            ],
            [
                'name' => 'LA GUADALUPE',
                'code' => '94885',
                'department_id' => 30
            ],
            [
                'name' => 'CACAHUAL',
                'code' => '94886',
                'department_id' => 30
            ],
            [
                'name' => 'PANA PANA',
                'code' => '94887',
                'department_id' => 30
            ],
            [
                'name' => 'MORICHAL NUEVO',
                'code' => '94888',
                'department_id' => 30
            ],
            [
                'name' => 'SAN JOSE DE GUAVIARE',
                'code' => '95001',
                'department_id' => 31
            ],
            [
                'name' => 'CALAMAR',
                'code' => '95015',
                'department_id' => 31
            ],
            [
                'name' => 'EL RETORNO',
                'code' => '95025',
                'department_id' => 31
            ],
            [
                'name' => 'MIRAFLORES',
                'code' => '95200',
                'department_id' => 31
            ],
            [
                'name' => 'MITU',
                'code' => '97001',
                'department_id' => 32
            ],
            [
                'name' => 'CARURU',
                'code' => '97161',
                'department_id' => 32
            ],
            [
                'name' => 'PACOA',
                'code' => '97511',
                'department_id' => 32
            ],
            [
                'name' => 'TARAIRA',
                'code' => '97666',
                'department_id' => 32
            ],
            [
                'name' => 'PAPUNAUA',
                'code' => '97777',
                'department_id' => 32
            ],
            [
                'name' => 'YAVARETE',
                'code' => '97889',
                'department_id' => 32
            ],
            [
                'name' => 'PUERTO CARREÑO',
                'code' => '99001',
                'department_id' => 33
            ],
            [
                'name' => 'LA PRIMAVERA',
                'code' => '99524',
                'department_id' => 33
            ],
            [
                'name' => 'SANTA ROSALIA',
                'code' => '99624',
                'department_id' => 33
            ],
            [
                'name' => 'CUMARIBO',
                'code' => '99773',
                'department_id' => 33
            ],
        ];
        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Unit_measure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $measures = [
            [
                'name' => 'spray pequeño',
                'code' => '04'
            ],
            [
                'name' => 'levantar',
                'code' => '05'
            ],
            [
                'name' => 'Lote calor',
                'code' => '08'
            ],
            [
                'name' => 'grupo',
                'code' => '10'
            ],
            [
                'name' => 'equipar',
                'code' => '11'
            ],
            [
                'name' => 'ración',
                'code' => '13'
            ],
            [
                'name' => 'Disparo',
                'code' => '14'
            ],
            [
                'name' => 'palo',
                'code' => '15'
            ],
            [
                'name' => 'tambor de ciento quince kg',
                'code' => '16'
            ],
            [
                'name' => 'tambor de cien libras',
                'code' => '17'
            ],
            [
                'name' => 'tambor de cincuenta y cinco galones (US)',
                'code' => '18'
            ],
            [
                'name' => 'camión cisterna',
                'code' => '19'
            ],
            [
                'name' => 'contenedor de veinte pies',
                'code' => '20'
            ],
            [
                'name' => 'contenedor de cuarenta pies',
                'code' => '21'
            ],
            [
                'name' => 'decilitro por gramo',
                'code' => '22'
            ],
            [
                'name' => 'gramo por centímetro cúbico',
                'code' => '23'
            ],
            [
                'name' => 'libra teórica',
                'code' => '24'
            ],
            [
                'name' => 'gramo por centímetro cuadrado',
                'code' => '25'
            ],
            [
                'name' => 'tonelada real',
                'code' => '26'
            ],
            [
                'name' => 'tonelada teórica',
                'code' => '27'
            ],
            [
                'name' => 'kilogramo por metro cuadrado',
                'code' => '28'
            ],
            [
                'name' => 'libra por mil pies cuadrados',
                'code' => '29'
            ],
            [
                'name' => 'Día de potencia del caballo por tonelada métrica seca al aire.',
                'code' => '30'
            ],
            [
                'name' => 'coger peso',
                'code' => '31'
            ],
            [
                'name' => 'kilogramo por aire seco tonelada métrica',
                'code' => '32'
            ],
            [
                'name' => 'kilopascales metros cuadrados por gramo',
                'code' => '33'
            ],
            [
                'name' => 'kilopascales por milímetro',
                'code' => '34'
            ],
            [
                'name' => 'mililitros por centímetro cuadrado segundo',
                'code' => '35'
            ],
            [
                'name' => 'pies cúbicos por minuto por pie cuadrado',
                'code' => '36'
            ],
            [
                'name' => 'onza por pie cuadrado',
                'code' => '37'
            ],
            [
                'name' => 'onzas por pie cuadrado por 0,01 pulgadas',
                'code' => '38'
            ],
            [
                'name' => 'mililitro por segundo',
                'code' => '40'
            ],
            [
                'name' => 'mililitro por minuto',
                'code' => '41'
            ],
            [
                'name' => 'bolsa súper a granel',
                'code' => '43'
            ],
            [
                'name' => 'bolsa a granel de quinientos kg',
                'code' => '44'
            ],
            [
                'name' => 'bolsa a granel de trescientos kg',
                'code' => '45'
            ],
            [
                'name' => 'bolsa a granel de cincuenta libras',
                'code' => '46'
            ],
            [
                'name' => 'bolsa de cincuenta libras',
                'code' => '47'
            ],
            [
                'name' => 'carga de automóviles a granel',
                'code' => '48'
            ],
            [
                'name' => 'kilogramos teóricos',
                'code' => '53'
            ],
            [
                'name' => 'tonelada teórica',
                'code' => '54'
            ],
            [
                'name' => 'sitas',
                'code' => '56'
            ],
            [
                'name' => 'malla',
                'code' => '57'
            ],
            [
                'name' => 'kilogramo neto',
                'code' => '58'
            ],
            [
                'name' => 'parte por millón',
                'code' => '59'
            ],
            [
                'name' => 'porcentaje de peso',
                'code' => '60'
            ],
            [
                'name' => 'parte por billón (US)',
                'code' => '61'
            ],
            [
                'name' => 'porcentaje por 1000 horas',
                'code' => '62'
            ],
            [
                'name' => 'tasa de fracaso en el tiempo',
                'code' => '63'
            ],
            [
                'name' => 'libra por pulgada cuadrada calibre',
                'code' => '64'
            ],
            [
                'name' => 'Oersted',
                'code' => '66'
            ],
            [
                'name' => 'prueba de escala específica',
                'code' => '69'
            ],
            [
                'name' => 'voltio amperio por libra',
                'code' => '71'
            ],
            [
                'name' => 'vatio por libra',
                'code' => '72'
            ],
            [
                'name' => 'amperio tum por centímetro',
                'code' => '73'
            ],
            [
                'name' => 'milipascal',
                'code' => '74'
            ],
            [
                'name' => 'gauss',
                'code' => '76'
            ],
            [
                'name' => 'mili pulgadas',

                'code' => '77'
            ],
            [
                'name' => 'kilogauss',
                'code' => '78'
            ],
            [
                'name' => 'libras por pulgada cuadrada absoluta',
                'code' => '80'
            ],
            [
                'name' => 'Enrique',
                'code' => '81'
            ],
            [   'name' => 'kilopound por pulgada cuadrada',
                'code' => '84'
            ],
            [
                'name' => 'fuerza libra pie',
                'code' => '85'
            ],
            [
                'name' => 'libra por pie cúbico',
                'code' => '87'
            ],
            [
                'name' => 'equilibrio',
                'code' => '89'
            ],
            [
                'name' => 'Saybold segundo universal',
                'code' => '90'
            ],
            [
                'name' => 'alimenta',
                'code' => '91'
            ],
            [
                'name' => 'calorías por centímetro cúbico',
                'code' => '92'
            ],
            [
                'name' => 'calorías por gramo',
                'code' => '93'
            ],
            [
                'name' => 'Unidad',
                'code' => '94'
            ],
            [
                'name' => 'veinte mil galones (US) de carros',
                'code' => '95'
            ],
            [
                'name' => 'diez mil galones (US) de carros',
                'code' => '96'
            ],
            [
                'name' => 'tambor de diez kg',
                'code' => '97'
            ],
            [
                'name' => 'tambor de quince kg',
                'code' => '98'
            ],
            [
                'name' => 'milla de coche',
                'code' => '1ª'
            ],
            [
                'name' => 'recuento de coches',
                'code' => '1B'
            ],
            [
                'name' => 'recuento de locomotoras',
                'code' => '1C'
            ],
            [
                'name' => 'recuento de cabos',
                'code' => '1D'
            ],
            [
                'name' => 'carro vacio',
                'code' => '1E'
            ],
            [
                'name' => 'millas de tren',
                'code' => '1F'
            ],
            [
                'name' => 'uso de combustible galón (US)',
                'code' => '1G'
            ],
            [
                'name' => 'milla del caboose',
                'code' => '1H'
            ],
            [
                'name' => 'tipo de interés fijo',
                'code' => '1I'
            ],
            [
                'name' => 'tonelada milla',
                'code' => '1J'
            ],
            [
                'name' => 'milla locomotora',
                'code' => '1K'
            ],
            [
                'name' => 'recuento total de coches',
                'code' => '1L'
            ],
            [
                'name' => 'milla de coche total',
                'code' => '1M'
            ],
            [
                'name' => 'cuarto de milla',
                'code' => '1X'
            ],
            [
                'name' => 'radianes por segundo',
                'code' => '2ª'
            ],
            [
                'name' => 'radianes por segundo al cuadrado',
                'code' => '2B'
            ],
            [
                'name' => 'Röntgen',
                'code' => '2C'
            ],
            [
                'name' => 'Unidad térmica británica por hora.',
                'code' => '2I'
            ],
            [
                'name' => 'centímetro cúbico por segundo',
                'code' => '2J'
            ],
            [
                'name' => 'pie cúbico por hora',
                'code' => '2K'
            ],
            [
                'name' => 'pie cúbico por minuto',
                'code' => '2L'
            ],
            [
                'name' => 'centímetro por segundo',
                'code' => '2M'
            ],
            [
                'name' => 'decibel',
                'code' => '2N'
            ],
            [
                'name' => 'kilobyte',
                'code' => '2P'
            ],
            [
                'name' => 'kilobecquerel',
                'code' => '2Q'
            ],
            [
                'name' => 'kilocurie',
                'code' => '2R'
            ],
            [
                'name' => 'megagramo',
                'code' => '2U'
            ],
            [
                'name' => 'megagramo por hora',
                'code' => '2V'
            ],
            [
                'name' => 'compartimiento',
                'code' => '2W'
            ],
            [
                'name' => 'metro por minuto',
                'code' => '2X'
            ],
            [
                'name' => 'milliröntgen',
                'code' => '2Y'
            ],
            [
                'name' => 'milivoltios',
                'code' => '2Z'
            ],
            [
                'name' => 'megajulio',
                'code' => '3B'
            ],
            [
                'name' => 'manmonth',
                'code' => '3C'
            ],
            [
                'name' => 'libra por libra de producto',
                'code' => '3E'
            ],
            [
                'name' => 'libra por pieza de producto',
                'code' => '3G'
            ],
            [
                'name' => 'kilogramo por kilogramo de producto',
                'code' => '3H'
            ],
            [
                'name' => 'kilogramo por pieza de producto',
                'code' => '3I'
            ],
            [
                'name' => 'bobina',
                'code' => '4ª'
            ],
            [
                'name' => 'gorra',
                'code' => '4B'
            ],
            [
                'name' => 'centistokes',
                'code' => '4C'
            ],
            [
                'name' => 'paquete de veinte',
                'code' => '4E'
            ],
            [
                'name' => 'microlitro',
                'code' => '4G'
            ],
            [
                'name' => 'micrometro',
                'code' => '4H'
            ],
            [
                'name' => 'miliamperio',
                'code' => '4K'
            ],
            [
                'name' => 'megabyte',
                'code' => '4L'
            ],
            [
                'name' => 'miligramo por hora',
                'code' => '4M'
            ],
            [
                'name' => 'megabecquerel',
                'code' => '4N'
            ],
            [
                'name' => 'microfarad',
                'code' => '4º'
            ],
            [
                'name' => 'newton por metro',
                'code' => '4P'
            ],
            [
                'name' => 'onza pulgada',
                'code' => '4Q'
            ],
            [
                'name' => 'pie onza',
                'code' => '4R'
            ],
            [
                'name' => 'picofarad',
                'code' => '4T'
            ],
            [
                'name' => 'libra por hora',
                'code' => '4U'
            ],
            [
                'name' => 'tonelada (US) por hora',
                'code' => '4W'
            ],
            [
                'name' => 'kilolitro por hora',
                'code' => '4X'
            ],
            [
                'name' => 'barril por minuto',
                'code' => '5ª'
            ],
            [
                'name' => 'lote',
                'code' => '5B'
            ],
            [
                'name' => 'galón (US) por mil',
                'code' => '5C'
            ],
            [
                'name' => 'MMSCF / día',
                'code' => '5E'
            ],
            [
                'name' => 'libras por mil',
                'code' => '5F'
            ],
            [
                'name' => 'bomba',
                'code' => '5G'
            ],
            [
                'name' => 'escenario',
                'code' => '5H'
            ],
            [
                'name' => 'pie cúbico estándar',
                'code' => '5I'
            ],
            [
                'name' => 'potencia hidráulica de caballos',
                'code' => '5J'
            ],
            [
                'name' => 'contar por minuto',
                'code' => '5K'
            ],
            [
                'name' => 'nivel sismico',
                'code' => '5P'
            ],
            [
                'name' => 'nfor sismica',
                'code' => '5Q'
            ],
            [
                'name' => '15 calorías C',
                'code' => 'A1'
            ],
            [
                'name' => 'amperio metro cuadrado por joule segundo',
                'code' => 'A10'
            ],
            [
                'name' => 'Ã ¥ ngström',
                'code' => 'A11'
            ],
            [
                'name' => 'unidad astronómica',
                'code' => 'A12'
            ],
            [
                'name' => 'attojoule',
                'code' => 'A13'
            ],
            [
                'name' => 'granero',
                'code' => 'A14'
            ],
            [
                'name' => 'granero por electrón voltio',
                'code' => 'A15'
            ],
            [
                'name' => 'granero por voltio de electrones esteradiano',
                'code' => 'A16'
            ],
            [
                'name' => 'granero por sterdian',
                'code' => 'A17'
            ],
            [
                'name' => 'becquerel por kilogramo',
                'code' => 'A18'
            ],
            [
                'name' => 'becquerel por metro cúbico',
                'code' => 'A19'
            ],
            [
                'name' => 'amperio por centímetro',
                'code' => 'A2'
            ],
            [
                'name' => 'Unidad térmica británica por segundo pie cuadrado grado Rankin',
                'code' => 'A20'
            ],
            [
                'name' => 'Unidad térmica británica por libra grado Rankin',
                'code' => 'A21'
            ],
            [
                'name' => 'Unidad térmica británica por segundo pie grado Rankin',
                'code' => 'A22'
            ],
            [
                'name' => 'Unidad térmica británica por hora pie cuadrado grado Rankin',
                'code' => 'A23'
            ],
            [
                'name' => 'candela por metro cuadrado',
                'code' => 'A24'
            ],
            [
                'name' => 'cheval vapeur',
                'code' => 'A25'
            ],
            [
                'name' => 'medidor de culombio',
                'code' => 'A26'
            ],
            [
                'name' => 'medidor de culombio al cuadrado por voltio',
                'code' => 'A27'
            ],
            [
                'name' => 'Coulomb por centímetro cúbico',
                'code' => 'A28'
            ],
            [
                'name' => 'Coulomb por metro cúbico',
                'code' => 'A29'
            ],
            [
                'name' => 'amperio por milímetro',
                'code' => 'A3'
            ],
            [
                'name' => 'Coulomb por milímetro cúbico',
                'code' => 'A30'
            ],
            [
                'name' => 'Coulomb por kilogramo segundo',
                'code' => 'A31'
            ],
            [
                'name' => 'Coulomb por mol',
                'code' => 'A32'
            ],
            [
                'name' => 'Coulomb por centímetro cuadrado',
                'code' => 'A33'
            ],
            [
                'name' => 'Coulomb por metro cuadrado',
                'code' => 'A34'
            ],
            [
                'name' => 'Coulomb por milímetro cuadrado',
                'code' => 'A35'
            ],
            [
                'name' => 'centímetro cúbico por mol',
                'code' => 'A36'
            ],
            [
                'name' => 'nformaci cúbico por mol',
                'code' => 'A37'
            ],
            [
                'name' => 'metro cúbico por coulomb',
                'code' => 'A38'
            ],
            [
                'name' => 'metro cúbico por kilogramo',
                'code' => 'A39'
            ],
            [
                'name' => 'amperio por centímetro cuadrado',
                'code' => 'A4'
            ],
            [
                'name' => 'metro cúbico por mol',
                'code' => 'A40'
            ],
            [
                'name' => 'amperio por metro cuadrado',
                'code' => 'A41'
            ],
            [
                'name' => 'curie por kilogramo',
                'code' => 'A42'
            ],
            [
                'name' => 'tonelaje de peso muerto',
                'code' => 'A43'
            ],
            [
                'name' => 'decalitro',
                'code' => 'A44'
            ],
            [
                'name' => 'decámetro',
                'code' => 'A45'
            ],
            [
                'name' => 'decitex',
                'code' => 'A47'
            ],
            [
                'name' => 'grado Rankin',
                'code' => 'A48'
            ],
            [
                'name' => 'negador',
                'code' => 'A49'
            ],
            [
                'name' => 'amperio metro cuadrado',
                'code' => 'A5'
            ],
            [
                'name' => 'dyn segundo por centímetro cúbico',
                'code' => 'A50'
            ],
            [
                'name' => 'dina segundo por centímetro',
                'code' => 'A51'
            ],
            [
                'name' => 'dina segundo por centímetro al quinto',
                'code' => 'A52'
            ],
            [
                'name' => 'electronvolt',
                'code' => 'A53'
            ],
            [
                'name' => 'electronvoltio por metro',
                'code' => 'A54'
            ],
            [
                'name' => 'metro electronvolt cuadrado',
                'code' => 'A55'
            ],
            [
                'name' => 'electronvoltio de metro cuadrado por kilogramo',
                'code' => 'A56'
            ],
            [
                'name' => 'ergio',
                'code' => 'A57'
            ],
            [
                'name' => 'erg por centímetro',
                'code' => 'A58'
            ],
            [
                'name' => 'amperio por metro cuadrado kelvin al cuadrado',
                'code' => 'A6'
            ],
            [
                'name' => 'erg por centímetro cúbico',
                'code' => 'A60'
            ],
            [
                'name' => 'erg por gramo',
                'code' => 'A61'
            ],
            [
                'name' => 'erg por gramo de segundo',
                'code' => 'A62'
            ],
            [
                'name' => 'erg por segundo',
                'code' => 'A63'
            ],
            [
                'name' => 'erg por segundo centímetro cuadrado',
                'code' => 'A64'
            ],
            [
                'name' => 'erg por centímetro cuadrado segundo',
                'code' => 'A65'
            ],
            [
                'name' => 'erg centímetro cuadrado',
                'code' => 'A66'
            ],
            [
                'name' => 'ergímetro cuadrado por gramo',
                'code' => 'A67'
            ],
            [
                'name' => 'exajulio',
                'code' => 'A68'
            ],
            [
                'name' => 'faradio por metro',
                'code' => 'A69'
            ],
            [
                'name' => 'amperio por milímetro cuadrado',
                'code' => 'A7'
            ],
            [
                'name' => 'femtojoule',
                'code' => 'A70'
            ],
            [
                'name' => 'femtometro',
                'code' => 'A71'
            ],
            [
                'name' => 'pie por segundo al cuadrado',
                'code' => 'A73'
            ],
            [
                'name' => 'pie-fuerza de la libra por segundo',
                'code' => 'A74'
            ],
            [
                'name' => 'tonelada de carga',
                'code' => 'A75'
            ],
            [
                'name' => 'galón',
                'code' => 'A76'
            ],
            [
                'name' => 'Unidad de desplazamiento CGS gaussiana',
                'code' => 'A77'
            ],
            [
                'name' => 'Unidad gaussiana CGS de corriente eléctrica.',
                'code' => 'A78'
            ],
            [
                'name' => 'Unidad Gaussian CGS de carga eléctrica.',
                'code' => 'A79'
            ],
            [
                'name' => 'amperio segundo',
                'code' => 'A8'
            ],
            [
                'name' => 'Unidad Gaussian CGS de intensidad de campo eléctrico.',
                'code' => 'A80'
            ],
            [
                'name' => 'Unidad Gaussian CGS de polarización eléctrica.',
                'code' => 'A81'
            ],
            [
                'name' => 'Unidad Gaussian CGS de potencial eléctrico.',
                'code' => 'A82'
            ],
            [
                'name' => 'Unidad Gaussiana CGS de magnetización.',
                'code' => 'A83'
            ],
            [
                'name' => 'gigacoulomb por metro cúbico',
                'code' => 'A84'
            ],
            [
                'name' => 'Gigaelectronvolt',
                'code' => 'A85'
            ],
            [
                'name' => 'gigahercios',
                'code' => 'A86'
            ],
            [
                'name' => 'gigaohm',
                'code' => 'A87'
            ],
            [
                'name' => 'medidor de gigaohm',
                'code' => 'A88'
            ],
            [
                'name' => 'gigapascal',
                'code' => 'A89'
            ],
            [
                'name' => 'tarifa',
                'code' => 'A9'
            ],
            [
                'name' => 'gigavatios',
                'code' => 'A90'
            ],
            [
                'name' => 'gon',
                'code' => 'A91'
            ],
            [
                'name' => 'gramo por metro cúbico',
                'code' => 'A93'
            ],
            [
                'name' => 'gramo por mol',
                'code' => 'A94'
            ],
            [
                'name' => 'gris',
                'code' => 'A95'
            ],
            [
                'name' => 'gris por segundo',
                'code' => 'A96'
            ],
            [
                'name' => 'hectopascal',
                'code' => 'A97'
            ],
            [
                'name' => 'Henry por metro',
                'code' => 'A98'
            ],
            [
                'name' => 'bola',
                'code' => 'AA'
            ],
            [
                'name' => 'paquete a granel',
                'code' => 'AB'
            ],
            [
                'name' => 'acre',
                'code' => 'ACR'
            ],
            [
                'name' => 'byte',
                'code' => 'AD'
            ],
            [
                'name' => 'amperio por metro',
                'code' => 'AE'
            ],
            [
                'name' => 'minuto adicional',
                'code' => 'AH'
            ],
            [
                'name' => 'minuto promedio por llamada',
                'code' => 'AI'
            ],
            [
                'name' => 'policía',
                'code' => 'AJ'
            ],
            [
                'name' => 'braza',
                'code' => 'AK'
            ],
            [
                'name' => 'nfor de acceso',
                'code' => 'AL'
            ],
            [
                'name' => 'ampolla',
                'code' => 'AM'
            ],
            [
                'name' => 'hora amperio',
                'code' => 'AMH'
            ],
            [
                'name' => 'amperio',
                'code' => 'AMP'
            ],
            [
                'name' => 'año',
                'code' => 'ANA'
            ],
            [
                'name' => 'solo libra de aluminio',
                'code' => 'AP'
            ],
            [
                'name' => 'onza troy o onza de boticarios',
                'code' => 'APZ'
            ],
            [
                'name' => 'Unidad de factor antihemofílico (AHF)',
                'code' => 'AQ'
            ],
            [
                'name' => 'supositorio',
                'code' => 'AR'
            ],
            [
                'name' => 'son',
                'code' => 'SON'
            ],
            [
                'name' => 'surtido',
                'code' => 'COMO'
            ],
            [
                'name' => 'fuerza alcohólica en masa',
                'code' => 'ASM'
            ],
            [
                'name' => 'fuerza alcohólica por volumen',
                'code' => 'ASU'
            ],
            [
                'name' => 'ambiente estándar',
                'code' => 'ATM'
            ],
            [
                'name' => 'ambiente técnico',
                'code' => 'ATT'
            ],
            [
                'name' => 'cápsula',
                'code' => 'AV'
            ],
            [
                'name' => 'vial lleno de polvo',
                'code' => 'AW'
            ],
            [
                'name' => 'montaje',
                'code' => 'SÍ'
            ],
            [
                'name' => 'Unidad térmica británica por libra',
                'code' => 'AZ'
            ],
            [
                'name' => 'Btu por pie cúbico',
                'code' => 'B0'
            ],
            [
                'name' => 'barril (US) por día',
                'code' => 'B1'
            ],
            [
                'name' => 'julios por kilogramo kelvin',
                'code' => 'B11'
            ],
            [
                'name' => 'julios por metro',
                'code' => 'B12'
            ],
            [
                'name' => 'julios por metro cuadrado',
                'code' => 'B13'
            ],
            [
                'name' => 'julios por metro a la cuarta potencia',
                'code' => 'B14'
            ],
            [
                'name' => 'julios por mol',
                'code' => 'B15'
            ],
            [
                'name' => 'julios por mol kelvin',
                'code' => 'B16'
            ],
            [
                'name' => 'joule segundo',
                'code' => 'B18'
            ],
            [
                'name' => 'litera',
                'code' => 'B2'
            ],
            [
                'name' => 'joule metro cuadrado por kilogramo',
                'code' => 'B20'
            ],
            [
                'name' => 'kelvin por vatio',
                'code' => 'B21'
            ],
            [
                'name' => 'Kiloampere',
                'code' => 'B22'
            ],
            [
                'name' => 'kiloampere por metro cuadrado',
                'code' => 'B23'
            ],
            [
                'name' => 'kiloampere por metro',
                'code' => 'B24'
            ],
            [
                'name' => 'kilobecquerel por kilogramo',
                'code' => 'B25'
            ],
            [
                'name' => 'kilocoulomb',
                'code' => 'B26'
            ],
            [
                'name' => 'kilocoulomb por metro cúbico',
                'code' => 'B27'
            ],
            [
                'name' => 'kilocoulomb por metro cuadrado',
                'code' => 'B28'
            ],
            [
                'name' => 'kiloelectronvolt',
                'code' => 'B29'
            ],
            [
                'name' => 'libra de bateo',
                'code' => 'B3'
            ],
            [
                'name' => 'kilogramo metro por segundo',
                'code' => 'B31'
            ],
            [
                'name' => 'kilogramo metro cuadrado',
                'code' => 'B32'
            ],
            [
                'name' => 'kilogramo metro cuadrado por segundo',
                'code' => 'B33'
            ],
            [
                'name' => 'kilogramo por decímetro cúbico',
                'code' => 'B34'
            ],
            [
                'name' => 'kilogramo por litro',
                'code' => 'B35'
            ],
            [
                'name' => 'caloría termoquímica por gramo',
                'code' => 'B36'
            ],
            [
                'name' => 'kilogramo de fuerza',
                'code' => 'B37'
            ],
            [
                'name' => 'metro de fuerza de kilogramo',
                'code' => 'B38'
            ],
            [
                'name' => 'metro de fuerza de kilogramo por segundo',
                'code' => 'B39'
            ],
            [
                'name' => 'barril imperial',
                'code' => 'B4'
            ],
            [
                'name' => 'kilogramo de fuerza por metro cuadrado',
                'code' => 'B40'
            ],
            [
                'name' => 'kilojoule per kelvin',
                'code' => 'B41'
            ],
            [
                'name' => 'kilojoule por kilogramo',
                'code' => 'B42'
            ],
            [
                'name' => 'kilojoule por kilogramo kelvin',
                'code' => 'B43'
            ],
            [
                'name' => 'kilojoule por mol',
                'code' => 'B44'
            ],
            [
                'name' => 'kilomol',
                'code' => 'B45'
            ],
            [
                'name' => 'kilomol por metro cúbico',
                'code' => 'B46'
            ],
            [
                'name' => 'Kilonewton',
                'code' => 'B47'
            ],
            [
                'name' => 'medidor de kilonewton',
                'code' => 'B48'
            ],
            [
                'name' => 'kiloohm',
                'code' => 'B49'
            ],
            [
                'name' => 'palanquilla',
                'code' => 'B5'
            ],
            [
                'name' => 'medidor de kiloohm',
                'code' => 'B50'
            ],
            [
                'name' => 'kilopond',
                'code' => 'B51'
            ],
            [
                'name' => 'kilosegundo',
                'code' => 'B52'
            ],
            [
                'name' => 'kilosiemens',
                'code' => 'B53'
            ],
            [
                'name' => 'kilosiemens por metro',
                'code' => 'B54'
            ],
            [
                'name' => 'kilovoltios por metro',
                'code' => 'B55'
            ],
            [
                'name' => 'kiloveber por metro',
                'code' => 'B56'
            ],
            [
                'name' => 'año luz',
                'code' => 'B57'
            ],
            [
                'name' => 'litro por mol',
                'code' => 'B58'
            ],
            [
                'name' => 'hora lumen',
                'code' => 'B59'
            ],
            [
                'name' => 'bollo',
                'code' => 'B6'
            ],
            [
                'name' => 'lumen por metro cuadrado',
                'code' => 'B60'
            ],
            [
                'name' => 'lumen por vatio',
                'code' => 'B61'
            ],
            [
                'name' => 'lumen segundo',
                'code' => 'B62'
            ],
            [
                'name' => 'hora de lux',
                'code' => 'B63'
            ],
            [
                'name' => 'lux segundo',
                'code' => 'B64'
            ],
            [
                'name' => 'Maxwell',
                'code' => 'B65'
            ],
            [
                'name' => 'megaamperios por metro cuadrado',
                'code' => 'B66'
            ],
            [
                'name' => 'megabecquerel por kilogramo',
                'code' => 'B67'
            ],
            [
                'name' => 'megacoulomb por metro cúbico',
                'code' => 'B69'
            ],
            [
                'name' => 'ciclo',
                'code' => 'B7'
            ],
            [
                'name' => 'megacoulomb por metro cuadrado',
                'code' => 'B70'
            ],
            [
                'name' => 'megaelectronvolt',
                'code' => 'B71'
            ],
            [
                'name' => 'megagramo por metro cúbico',
                'code' => 'B72'
            ],
            [
                'name' => 'meganewton',
                'code' => 'B73'
            ],
            [
                'name' => 'medidor de meganewton',
                'code' => 'B74'
            ],
            [
                'name' => 'megaohm',
                'code' => 'B75'
            ],
            [
                'name' => 'metro megaohm',
                'code' => 'B76'
            ],
            [
                'name' => 'megasiemens por metro',
                'code' => 'B77'
            ],
            [
                'name' => 'megavoltio',
                'code' => 'B78'
            ],
            [
                'name' => 'megavolt por metro',
                'code' => 'B79'
            ],
            [
                'name' => 'julios por metro cúbico',
                'code' => 'B8'
            ],
            [
                'name' => 'metro recíproco cuadrado recíproco segundo',
                'code' => 'B81'
            ],
            [
                'name' => 'metro a la cuarta potencia',
                'code' => 'B83'
            ],
            [
                'name' => 'microamperios',
                'code' => 'B84'
            ],
            [
                'name' => 'microbar',
                'code' => 'B85'
            ],
            [
                'name' => 'microcoulomb',
                'code' => 'B86'
            ],
            [
                'name' => 'microcoulomb por metro cúbico',
                'code' => 'B87'
            ],
            [
                'name' => 'microcoulomb por metro cuadrado',
                'code' => 'B88'
            ],
            [
                'name' => 'microfarada por metro',
                'code' => 'B89'
            ],
            [
                'name' => 'batt',
                'code' => 'B9'
            ],
            [
                'name' => 'microhenry',
                'code' => 'B90'
            ],
            [
                'name' => 'microhenry por metro',
                'code' => 'B91'
            ],
            [
                'name' => 'micronewton',
                'code' => 'B92'
            ],
            [
                'name' => 'medidor de micronewton',
                'code' => 'B93'
            ],
            [
                'name' => 'microohm',
                'code' => 'B94'
            ],
            [
                'name' => 'medidor de microohmios',
                'code' => 'B95'
            ],
            [
                'name' => 'micropascal',
                'code' => 'B96'
            ],
            [
                'name' => 'microradiano',
                'code' => 'B97'
            ],
            [
                'name' => 'microsegundo',
                'code' => 'B98'
            ],
            [
                'name' => 'microsiemens',
                'code' => 'B99'
            ],
            [
                'name' => 'bar',
                'code' => 'BAR'
            ],
            [
                'name' => 'caja base',
                'code' => 'BB'
            ],
            [
                'name' => 'tablero',
                'code' => 'BD'
            ],
            [
                'name' => 'haz',
                'code' => 'SER'
            ],
            [
                'name' => 'pie de tabla',
                'code' => 'BFT'
            ],
            [
                'name' => 'bolso',
                'code' => 'BG'
            ],
            [
                'name' => 'cepillo',
                'code' => 'BH'
            ],
            [
                'name' => 'potencia al freno',
                'code' => 'BHP'
            ],
            [
                'name' => 'trillón de dólares',
                'code' => 'BIL'
            ],
            [
                'name' => 'cangilón',
                'code' => 'BJ'
            ],
            [
                'name' => 'cesta',
                'code' => 'BK'
            ],
            [
                'name' => 'bala',
                'code' => 'BL'
            ],
            [
                'name' => 'barril seco',
                'code' => 'BLD'
            ],
            [
                'name' => 'barril (EE. UU.) (petróleo etc.)',
                'code' => 'BLL'
            ],
            [
                'name' => 'botella',
                'code' => 'BO'
            ],
            [
                'name' => 'cien pies de tabla',
                'code' => 'BP'
            ],
            [
                'name' => 'becquerel',
                'code' => 'BQL'
            ],
            [
                'name' => 'bar',
                'code' => 'BR'
            ],
            [
                'name' => 'tornillo',
                'code' => 'BT'
            ],
            [
                'name' => 'Unidad Térmica Británica',
                'code' => 'BTU'
            ],
            [
                'name' => 'bushel (EE. UU.)',
                'code' => 'BUA'
            ],
            [
                'name' => 'bushel (Reino Unido)',
                'code' => 'BUI'
            ],
            [
                'name' => 'peso base',
                'code' => 'BW'
            ],
            [
                'name' => 'caja',
                'code' => 'BX'
            ],
            [
                'name' => 'millones de BTUs',
                'code' => 'BZ'
            ],
            [
                'name' => 'llamada',
                'code' => 'C0'
            ],
            [
                'name' => 'producto compuesto libra (peso total)',
                'code' => 'C1'
            ],
            [
                'name' => 'millifarad',
                'code' => 'C10'
            ],
            [
                'name' => 'miligal',
                'code' => 'C11'
            ],
            [
                'name' => 'miligramo por metro',
                'code' => 'C12'
            ],
            [
                'name' => 'miligray',
                'code' => 'C13'
            ],
            [
                'name' => 'milihenry',
                'code' => 'C14'
            ],
            [
                'name' => 'milijoule',
                'code' => 'C15'
            ],
            [
                'name' => 'milímetro por segundo',
                'code' => 'C16'
            ],
            [
                'name' => 'milímetro cuadrado por segundo',
                'code' => 'C17'
            ],
            [
                'name' => 'milimol',
                'code' => 'C18'
            ],
            [
                'name' => 'mol por kilogramo',
                'code' => 'C19'
            ],
            [
                'name' => 'carset',
                'code' => 'C2'
            ],
            [
                'name' => 'millinewton',
                'code' => 'C20'
            ],
            [
                'name' => 'millinewton por metro',
                'code' => 'C22'
            ],
            [
                'name' => 'medidor de miliohm',
                'code' => 'C23'
            ],
            [
                'name' => 'segundo milipascal',
                'code' => 'C24'
            ],
            [
                'name' => 'miliradian',
                'code' => 'C25'
            ],
            [
                'name' => 'milisegundo',
                'code' => 'C26'
            ],
            [
                'name' => 'milisiemens',
                'code' => 'C27'
            ],
            [
                'name' => 'milisievert',
                'code' => 'C28'
            ],
            [
                'name' => 'millitesla',
                'code' => 'C29'
            ],
            [
                'name' => 'microvoltios por metro',
                'code' => 'C3'
            ],
            [
                'name' => 'milivoltios por metro',
                'code' => 'C30'
            ],
            [
                'name' => 'milivatios',
                'code' => 'C31'
            ],
            [
                'name' => 'milivatios por metro cuadrado',
                'code' => 'C32'
            ],
            [
                'name' => 'milliweber',
                'code' => 'C33'
            ],
            [
                'name' => 'Topo',
                'code' => 'C34'
            ],
            [
                'name' => 'mol por decímetro cúbico',
                'code' => 'C35'
            ],
            [
                'name' => 'mol por metro cúbico',
                'code' => 'C36'
            ],
            [
                'name' => 'mol por litro',
                'code' => 'C38'
            ],
            [
                'name' => 'Nanoampere',
                'code' => 'C39'
            ],
            [
                'name' => 'partido de carga',
                'code' => 'C4'
            ],
            [
                'name' => 'nanocoulomb',
                'code' => 'C40'
            ],
            [
                'name' => 'nanofarad',
                'code' => 'C41'
            ],
            [
                'name' => 'nanofarad por metro',
                'code' => 'C42'
            ],
            [
                'name' => 'nanohenry',
                'code' => 'C43'
            ],
            [
                'name' => 'nanohenry por metro',
                'code' => 'C44'
            ],
            [
                'name' => 'nanometro',
                'code' => 'C45'
            ],
            [
                'name' => 'medidor de nanoohm',
                'code' => 'C46'
            ],
            [
                'name' => 'nanosegundo',
                'code' => 'C47'
            ],
            [
                'name' => 'nanotesla',
                'code' => 'C48'
            ],
            [
                'name' => 'nanovatio',
                'code' => 'C49'
            ],
            [
                'name' => 'costo',
                'code' => 'C5'
            ],
            [
                'name' => 'neper',
                'code' => 'C50'
            ],
            [
                'name' => 'neper por segundo',
                'code' => 'C51'
            ],
            [
                'name' => 'picometro',
                'code' => 'C52'
            ],
            [
                'name' => 'metro de newton segundo',
                'code' => 'C53'
            ],
            [
                'name' => 'newton metro cuadrado kilogramo cuadrado',
                'code' => 'C54'
            ],
            [
                'name' => 'newton por metro cuadrado',
                'code' => 'C55'
            ],
            [
                'name' => 'newton por milímetro cuadrado',
                'code' => 'C56'
            ],
            [
                'name' => 'newton segundo',
                'code' => 'C57'
            ],
            [
                'name' => 'newton segundo por metro',
                'code' => 'C58'
            ],
            [
                'name' => 'octava',
                'code' => 'C59'
            ],
            [
                'name' => 'célula',
                'code' => 'C6'
            ],
            [
                'name' => 'ohm centímetro',
                'code' => 'C60'
            ],
            [
                'name' => 'ohm metro',
                'code' => 'C61'
            ],
            [
                'name' => 'uno',
                'code' => 'C62'
            ],
            [
                'name' => 'parsec',
                'code' => 'C63'
            ],
            [
                'name' => 'pascal por kelvin',
                'code' => 'C64'
            ],
            [
                'name' => 'segundo pascal',
                'code' => 'C65'
            ],
            [
                'name' => 'segundo pascal por metro cúbico',
                'code' => 'C66'
            ],
            [
                'name' => 'segundo pascal por metro',
                'code' => 'C67'
            ],
            [
                'name' => 'petajoule',
                'code' => 'C68'
            ],
            [
                'name' => 'telefono',
                'code' => 'C69'
            ],
            [
                'name' => 'centipoise',
                'code' => 'C7'
            ],
            [
                'name' => 'picoampere',
                'code' => 'C70'
            ],
            [
                'name' => 'picocoulomb',
                'code' => 'C71'
            ],
            [
                'name' => 'picofarad por metro',
                'code' => 'C72'
            ],
            [
                'name' => 'picohenry',
                'code' => 'C73'
            ],
            [
                'name' => 'picowatt',
                'code' => 'C75'
            ],
            [
                'name' => 'picowatt por metro cuadrado',
                'code' => 'C76'
            ],
            [
                'name' => 'medidor de libras',
                'code' => 'C77'
            ],
            [
                'name' => 'fuerza de libra',
                'code' => 'C78'
            ],
            [
                'name' => 'Millicoulomb por kilogramo',
                'code' => 'C8'
            ],
            [
                'name' => 'rad',
                'code' => 'C80'
            ],
            [
                'name' => 'radián',
                'code' => 'C81'
            ],
            [
                'name' => 'medidor de radianes al cuadrado por mol',
                'code' => 'C82'
            ],
            [
                'name' => 'medidor de radianes al cuadrado por kilogramo',
                'code' => 'C83'
            ],
            [
                'name' => 'radian por metro',
                'code' => 'C84'
            ],
            [
                'name' => 'â € ngstr recíproco “m',
                'code' => 'C85'
            ],
            [
                'name' => 'metro cúbico recíproco',
                'code' => 'C86'
            ],
            [
                'name' => 'metro cúbico recíproco por segundo',
                'code' => 'C87'
            ],
            [
                'name' => 'voltios de electrones recíprocos por metro cúbico',
                'code' => 'C88'
            ],
            [
                'name' => 'Henry Recíproco',
                'code' => 'C89'
            ],
            [
                'name' => 'grupo de bobina',
                'code' => 'C9'
            ],
            [
                'name' => 'Joule recíproco por metro cúbico',
                'code' => 'C90'
            ],
            [
                'name' => 'kelvin recíproco o kelvin al poder menos uno',
                'code' => 'C91'
            ],
            [
                'name' => 'medidor recíproco',
                'code' => 'C92'
            ],
            [
                'name' => 'metro cuadrado recíproco',
                'code' => 'C93'
            ],
            [
                'name' => 'minuto recíproco',
                'code' => 'C94'
            ],
            [
                'name' => 'mole recíproco',
                'code' => 'C95'
            ],
            [
                'name' => 'Pascal recíproco o pascal a la potencia menos uno.',
                'code' => 'C96'
            ],
            [
                'name' => 'segundo recíproco',
                'code' => 'C97'
            ],
            [
                'name' => 'segundo recíproco por metro cúbico',
                'code' => 'C98'
            ],
            [
                'name' => 'segundo recíproco por metro cuadrado',
                'code' => 'C99'
            ],
            [
                'name' => 'Caja',
                'code' => 'CA'
            ],
            [
                'name' => 'Capacidad de carga en toneladas métricas.',
                'code' => 'CCT'
            ],
            [
                'name' => 'candela',
                'code' => 'CDL'
            ],
            [
                'name' => 'grado Celsius',
                'code' => 'CEL'
            ],
            [
                'name' => 'cien',
                'code' => 'CEN'
            ],
            [
                'name' => 'tarjeta',
                'code' => 'CG'
            ],
            [
                'name' => 'centigramo',
                'code' => 'CGM'
            ],
            [
                'name' => 'envase',
                'code' => 'CH'
            ],
            [
                'name' => 'cono',
                'code' => 'CJ'
            ],
            [
                'name' => 'conector',
                'code' => 'CK'
            ],
            [
                'name' => 'Coulomb por kilogramo',
                'code' => 'CKG'
            ],
            [
                'name' => 'bobina',
                'code' => 'CL'
            ],
            [
                'name' => 'cientos de licencia',
                'code' => 'CLF'
            ],
            [
                'name' => 'centilitro',
                'code' => 'CLT'
            ],
            [
                'name' => 'centímetro cuadrado',
                'code' => 'CMK'
            ],
            [
                'name' => 'centímetro cúbico',
                'code' => 'CMQ'
            ],
            [
                'name' => 'centímetro',
                'code' => 'CMT'
            ],
            [
                'name' => 'paquete de cien',
                'code' => 'CNP'
            ],
            [
                'name' => 'Cental (Reino Unido)',
                'code' => 'CNT'
            ],
            [
                'name' => 'garrafón',
                'code' => 'CO'
            ],
            [
                'name' => 'culombio',
                'code' => 'COU'
            ],
            [
                'name' => 'cartucho',
                'code' => 'CQ'
            ],
            [
                'name' => 'caja',
                'code' => 'CR'
            ],
            [
                'name' => 'caso',
                'code' => 'CS'
            ],
            [
                'name' => 'caja de cartón',
                'code' => 'CT'
            ],
            [
                'name' => 'quilate métrico',
                'code' => 'CTM'
            ],
            [
                'name' => 'vaso',
                'code' => 'CU'
            ],
            [
                'name' => 'curie',
                'code' => 'CUR'
            ],
            [
                'name' => 'cubrir',
                'code' => 'CV'
            ],
            [
                'name' => 'cien libras (quintales) / cien pesos (US)',
                'code' => 'CWA'
            ],
            [
                'name' => 'cien pesos (Reino Unido)',
                'code' => 'CWI'
            ],
            [
                'name' => 'cilindro',
                'code' => 'CY'
            ],
            [
                'name' => 'combo',
                'code' => 'CZ'
            ],
            [
                'name' => 'segundo recíproco por esteradiano',
                'code' => 'D1'
            ],
            [
                'name' => 'siemens por metro',
                'code' => 'D10'
            ],
            [
                'name' => 'siemens metro cuadrado por mol',
                'code' => 'D12'
            ],
            [
                'name' => 'sievert',
                'code' => 'D13'
            ],
            [
                'name' => 'mil yardas lineales',
                'code' => 'D14'
            ],
            [
                'name' => 'sone',
                'code' => 'D15'
            ],
            [
                'name' => 'centímetro cuadrado por ergio',
                'code' => 'D16'
            ],
            [
                'name' => 'centímetro cuadrado por erg esterlina',
                'code' => 'D17'
            ],
            [
                'name' => 'metro kelvin',
                'code' => 'D18'
            ],
            [
                'name' => 'kelvin metro cuadrado por vatio',
                'code' => 'D19'
            ],
            [
                'name' => 'segundo recíproco por metros cuadrados esteradianos',
                'code' => 'D2'
            ],
            [
                'name' => 'metro cuadrado por julio',
                'code' => 'D20'
            ],
            [
                'name' => 'metro cuadrado por kilogramo',
                'code' => 'D21'
            ],
            [
                'name' => 'metro cuadrado por mol',
                'code' => 'D22'
            ],
            [
                'name' => 'pluma gramo (proteína)',
                'code' => 'D23'
            ],
            [
                'name' => 'metro cuadrado por esterilizador',
                'code' => 'D24'
            ],
            [
                'name' => 'metro cuadrado por julios esteradianos',
                'code' => 'D25'
            ],
            [
                'name' => 'metro cuadrado por voltio segundo',
                'code' => 'D26'
            ],
            [
                'name' => 'esteradiano',
                'code' => 'D27'
            ],
            [
                'name' => 'sifón',
                'code' => 'D28'
            ],
            [
                'name' => 'terahercios',
                'code' => 'D29'
            ],
            [
                'name' => 'terajulio',
                'code' => 'D30'
            ],
            [
                'name' => 'teravatio',
                'code' => 'D31'
            ],
            [
                'name' => 'hora de teravatio',
                'code' => 'D32'
            ],
            [
                'name' => 'tesla',
                'code' => 'D33'
            ],
            [
                'name' => 'Texas',
                'code' => 'D34'
            ],
            [
                'name' => 'caloría termoquímica',
                'code' => 'D35'
            ],
            [
                'name' => 'caloría termoquímica por gramo kelvin',
                'code' => 'D37'
            ],
            [
                'name' => 'calorías termoquímicas por segundo centímetro kelvin',
                'code' => 'D38'
            ],
            [
                'name' => 'calorías termoquímicas por segundo centímetro cuadrado kelvin',
                'code' => 'D39'
            ],
            [
                'name' => 'mil litros',
                'code' => 'D40'
            ],
            [
                'name' => 'tonelada por metro cúbico',
                'code' => 'D41'
            ],
            [
                'name' => 'año tropical',
                'code' => 'D42'
            ],
            [
                'name' => 'unidad de masa atómica unificada',
                'code' => 'D43'
            ],
            [
                'name' => 'var',
                'code' => 'D44'
            ],
            [
                'name' => 'voltios al cuadrado por kelvin al cuadrado',
                'code' => 'D45'
            ],
            [
                'name' => 'voltio – amperio',
                'code' => 'D46'
            ],
            [
                'name' => 'voltio por centímetro',
                'code' => 'D47'
            ],
            [
                'name' => 'voltio por kelvin',
                'code' => 'D48'
            ],
            [
                'name' => 'milivoltios por kelvin',
                'code' => 'D49'
            ],
            [
                'name' => 'kilogramo por centímetro cuadrado',
                'code' => 'D5'
            ],
            [
                'name' => 'voltios por metro',
                'code' => 'D50'
            ],
            [
                'name' => 'voltios por milímetro',
                'code' => 'D51'
            ],
            [
                'name' => 'vatios por kelvin',
                'code' => 'D52'
            ],
            [
                'name' => 'vatios por metro kelvin',
                'code' => 'D53'
            ],
            [
                'name' => 'vatios por metro cuadrado',
                'code' => 'D54'
            ],
            [
                'name' => 'vatios por metro cuadrado kelvin',
                'code' => 'D55'
            ],
            [
                'name' => 'vatios por metro cuadrado de kelvin a la cuarta potencia',
                'code' => 'D56'
            ],
            [
                'name' => 'vatios por steradian',
                'code' => 'D57'
            ],
            [
                'name' => 'vatios por metro cuadrado esterlino',
                'code' => 'D58'
            ],
            [
                'name' => 'weber por metro',
                'code' => 'D59'
            ],
            [
                'name' => 'röntgen por segundo',
                'code' => 'D6'
            ],
            [
                'name' => 'weber por milímetro',
                'code' => 'D60'
            ],
            [
                'name' => 'minuto',
                'code' => 'D61'
            ],
            [
                'name' => 'segundo',
                'code' => 'D62'
            ],
            [
                'name' => 'libro',
                'code' => 'D63'
            ],
            [
                'name' => 'bloquear',
                'code' => 'D64'
            ],
            [
                'name' => 'redondo',
                'code' => 'D65'
            ],
            [
                'name' => 'casete',
                'code' => 'D66'
            ],
            [
                'name' => 'dólar por hora',
                'code' => 'D67'
            ],
            [
                'name' => 'pulgada a la cuarta potencia',
                'code' => 'D69'
            ],
            [
                'name' => 'Sandwich',
                'code' => 'D7'
            ],
            [
                'name' => 'Tabla Internacional (IT) caloría',
                'code' => 'D70'
            ],
            [
                'name' => 'Tabla Internacional (IT) calorías por segundo centímetro kelvin',
                'code' => 'D71'
            ],
            [
                'name' => 'Tabla Internacional (IT) calorías por segundo centímetro cuadrado kelvin',
                'code' => 'D72'
            ],
            [
                'name' => 'joule metro cuadrado',
                'code' => 'D73'
            ],
            [
                'name' => 'kilogramo por mol',
                'code' => 'D74'
            ],
            [
                'name' => 'Tabla Internacional (IT) calorías por gramo',
                'code' => 'D75'
            ],
            [
                'name' => 'Tabla Internacional (IT) calorías por gramo kelvin',
                'code' => 'D76'
            ],
            [
                'name' => 'megacoulomb',
                'code' => 'D77'
            ],
            [
                'name' => 'haz',
                'code' => 'D79'
            ],
            [
                'name' => 'puntaje de drenaje',
                'code' => 'D8'
            ],
            [
                'name' => 'microwatt',
                'code' => 'D80'
            ],
            [
                'name' => 'microtesla',
                'code' => 'D81'
            ],
            [
                'name' => 'microvoltio',
                'code' => 'D82'
            ],
            [
                'name' => 'medidor de millinewton',
                'code' => 'D83'
            ],
            [
                'name' => 'microwatt por metro cuadrado',
                'code' => 'D85'
            ],
            [
                'name' => 'Millicoulomb',
                'code' => 'D86'
            ],
            [
                'name' => 'milimol por kilogramo',
                'code' => 'D87'
            ],
            [
                'name' => 'millicoulomb por metro cúbico',
                'code' => 'D88'
            ],
            [
                'name' => 'millicoulomb por metro cuadrado',
                'code' => 'D89'
            ],
            [
                'name' => 'dina por centímetro cuadrado',
                'code' => 'D9'
            ],
            [
                'name' => 'metro cúbico (neto)',
                'code' => 'D90'
            ],
            [
                'name' => 'movimiento rápido del ojo',
                'code' => 'D91'
            ],
            [
                'name' => 'banda',
                'code' => 'D92'
            ],
            [
                'name' => 'segundo por metro cúbico',
                'code' => 'D93'
            ],
            [
                'name' => 'segundo por metro cúbico radianes',
                'code' => 'D94'
            ],
            [
                'name' => 'julios por gramo',
                'code' => 'D95'
            ],
            [
                'name' => 'libra bruta',
                'code' => 'D96'
            ],
            [
                'name' => 'carga de palet / unidad',
                'code' => 'D97'
            ],
            [
                'name' => 'libra de masa',
                'code' => 'D98'
            ],
            [
                'name' => 'manga',
                'code' => 'D99'
            ],
            [
                'name' => 'despreciar',
                'code' => 'DAA'
            ],
            [
                'name' => 'diez dias',
                'code' => 'DAD'
            ],
            [
                'name' => 'día',
                'code' => 'DAY'
            ],
            [
                'name' => 'libra seca',
                'code' => 'DB'
            ],
            [
                'name' => 'disco',
                'code' => 'DC'
            ],
            [
                'name' => 'la licenciatura',
                'code' => 'DD'
            ],
            [
                'name' => 'acuerdo',
                'code' => 'DE'
            ],
            [
                'name' => 'década',
                'code' => 'DEC'
            ],
            [
                'name' => 'decigramo',
                'code' => 'DG'
            ],
            [
                'name' => 'dispensador',
                'code' => 'DI'
            ],
            [
                'name' => 'decagramo',
                'code' => 'DJ'
            ],
            [
                'name' => 'decilitro',
                'code' => 'DLT'
            ],
            [
                'name' => 'nformaci cuadrado',
                'code' => 'DMK'
            ],
            [
                'name' => 'decímetro cúbico',
                'code' => 'DMQ'
            ],
            [
                'name' => 'decímetro',
                'code' => 'DMT'
            ],
            [
                'name' => 'medidor de decinewton',
                'code' => 'DN'
            ],
            [
                'name' => 'docena pieza',
                'code' => 'DPC'
            ],
            [
                'name' => 'docena par',
                'code' => 'DPR'
            ],
            [
                'name' => 'tonelaje de desplazamiento',
                'code' => 'DPT'
            ],
            [
                'name' => 'registro de datos',
                'code' => 'DQ'
            ],
            [
                'name' => 'tambor',
                'code' => 'DR'
            ],
            [
                'name' => 'dram (US)',
                'code' => 'DRA'
            ],
            [
                'name' => 'dram (Reino Unido)',
                'code' => 'DRI'
            ],
            [
                'name' => 'docena rollo',
                'code' => 'DRL'
            ],
            [
                'name' => 'dracma (Reino Unido)',
                'code' => 'DRM'
            ],
            [
                'name' => 'monitor',
                'code' => 'DS'
            ],
            [
                'name' => 'tonelada seca',
                'code' => 'DT'
            ],
            [
                'name' => 'Decitonne',
                'code' => 'DTN'
            ],
            [
                'name' => 'dina',
                'code' => 'DU'
            ],
            [
                'name' => 'pennyweight',
                'code' => 'DWT'
            ],
            [
                'name' => 'dina por centímetro',
                'code' => 'DX'
            ],
            [
                'name' => 'libro de directorio',
                'code' => 'DY'
            ],
            [
                'name' => 'docena',
                'code' => 'DZN'
            ],
            [
                'name' => 'paquete de doce',
                'code' => 'DZP'
            ],
            [
                'name' => 'cinturón',
                'code' => 'E2'
            ],
            [
                'name' => 'remolque',
                'code' => 'E3'
            ],
            [
                'name' => 'kilogramo bruto',
                'code' => 'E4'
            ],
            [
                'name' => 'tonelada métrica larga',
                'code' => 'E5'
            ],
            [
                'name' => 'cada',
                'code' => 'EA'
            ],
            [
                'name' => 'casilla de correo electrónico',
                'code' => 'EB'
            ],
            [
                'name' => 'cada uno por mes',
                'code' => 'CE'
            ],
            [
                'name' => 'paquete de once',
                'code' => 'EP'
            ],
            [
                'name' => 'galón equivalente',
                'code' => 'EQ'
            ],
            [
                'name' => 'sobre',
                'code' => 'EV'
            ],
            [
                'name' => 'mil pies cúbicos por día',
                'code' => 'F1'
            ],
            [
                'name' => 'Fibra por centímetro cúbico de aire',
                'code' => 'F9'
            ],
            [
                'name' => 'grado Fahrenheit',
                'code' => 'FAH'
            ],
            [
                'name' => 'faradio',
                'code' => 'FAR'
            ],
            [
                'name' => 'campo',
                'code' => 'FB'
            ],
            [
                'name' => 'mil pies cúbicos',
                'code' => 'FC'
            ],
            [
                'name' => 'millón de partículas por pie cúbico',
                'code' => 'FD'
            ],
            [
                'name' => 'pie de pista',
                'code' => 'FE'
            ],
            [
                'name' => 'cien metros cúbicos',
                'code' => 'FF'
            ],
            [
                'name' => 'parche transdérmico',
                'code' => 'FG'
            ],
            [
                'name' => 'micromol',
                'code' => 'FH'
            ],
            [
                'name' => 'tonelada en escamas',
                'code' => 'FL'
            ],
            [
                'name' => 'millones de pies cúbicos',
                'code' => 'FM'
            ],
            [
                'name' => 'pie',
                'code' => 'FOT'
            ],
            [
                'name' => 'libra por pie cuadrado',
                'code' => 'FP'
            ],
            [
                'name' => 'pie por minuto',
                'code' => 'FR'
            ],
            [
                'name' => 'pie por segundo',
                'code' => 'FS'
            ],
            [
                'name' => 'pie cuadrado',
                'code' => 'FTK'
            ],
            [
                'name' => 'pie cubico',
                'code' => 'FTQ'
            ],
            [
                'name' => 'US galones por minuto',
                'code' => 'G2'
            ],
            [
                'name' => 'Galon imperial por minuto',
                'code' => 'G3'
            ],
            [
                'name' => 'hoja de microficha',
                'code' => 'G7'
            ],
            [
                'name' => 'galón (US) por día',
                'code' => 'GB'
            ],
            [
                'name' => 'gigabecquerel',
                'code' => 'GBQ'
            ],
            [
                'name' => 'gramo por 100 gramo',
                'code' => 'GC'
            ],
            [
                'name' => 'barril bruto',
                'code' => 'GD'
            ],
            [
                'name' => 'libra por galón (US)',
                'code' => 'GE'
            ],
            [
                'name' => 'gramo por metro (gramo por 100 centímetros)',
                'code' => 'GF'
            ],
            [
                'name' => 'gramo de isótopo fisionable',
                'code' => 'GFI'
            ],
            [
                'name' => 'gramo',
                'code' => 'GGR'
            ],
            [
                'name' => 'medio galón (EE. UU.)',
                'code' => 'GH'
            ],
            [
                'name' => 'branquias',
                'code' => 'GIA'
            ],
            [
                'name' => 'Gill (Reino Unido)',
                'code' => 'GII'
            ],
            [
                'name' => 'gramo por mililitro',
                'code' => 'GJ'
            ],
            [
                'name' => 'gramo por kilogramo',
                'code' => 'G K'
            ],
            [
                'name' => 'gramo por litro',
                'code' => 'GL'
            ],
            [
                'name' => 'galón seco (EE. UU.)',
                'code' => 'GLD'
            ],
            [
                'name' => 'galón (Reino Unido)',
                'code' => 'GLI'
            ],
            [
                'name' => 'galón',
                'code' => 'GLL'
            ],
            [
                'name' => 'gramo por metro cuadrado',
                'code' => 'GM'
            ],
            [
                'name' => 'galón bruto',
                'code' => 'GN'
            ],
            [
                'name' => 'miligramos por metro cuadrado',
                'code' => 'GO'
            ],
            [
                'name' => 'miligramo por metro cúbico',
                'code' => 'GP'
            ],
            [
                'name' => 'microgramos por metro cúbico',
                'code' => 'GQ'
            ],
            [
                'name' => 'gramo',
                'code' => 'GRM'
            ],
            [
                'name' => 'grano',
                'code' => 'GRN'
            ],
            [
                'name' => 'bruto',
                'code' => 'GRO'
            ],
            [
                'name' => 'tonelada de registro bruto',
                'code' => 'GRT'
            ],
            [
                'name' => 'tonelada bruta',
                'code' => 'GT'
            ],
            [
                'name' => 'gigajoule',
                'code' => 'GV'
            ],
            [
                'name' => 'galón por mil pies cúbicos',
                'code' => 'GW'
            ],
            [
                'name' => 'hora de gigavatios',
                'code' => 'GWH'
            ],
            [
                'name' => 'patio bruto',
                'code' => 'GY'
            ],
            [
                'name' => 'sistema de medición',
                'code' => 'GZ'
            ],
            [
                'name' => 'media página – electrónica',
                'code' => 'H1'
            ],
            [
                'name' => 'medio litro',
                'code' => 'H2'
            ],
            [
                'name' => 'madeja',
                'code' => 'HA'
            ],
            [
                'name' => 'hectárea',
                'code' => 'HAR'
            ],
            [
                'name' => 'hectobar',
                'code' => 'HBA'
            ],
            [
                'name' => 'cien cajas',
                'code' => 'HBX'
            ],
            [
                'name' => 'cien cuentas',
                'code' => 'HC'
            ],
            [
                'name' => 'media docena',
                'code' => 'HD'
            ],
            [
                'name' => 'centésima de quilate',
                'code' => 'ÉL'
            ],
            [
                'name' => 'cien pies',
                'code' => 'HF'
            ],
            [
                'name' => 'hectogramo',
                'code' => 'HGM'
            ],
            [
                'name' => 'cien pies cúbicos',
                'code' => 'HH'
            ],
            [
                'name' => 'cien hojas',
                'code' => 'HI'
            ],
            [
                'name' => 'cien unidades internacionales',
                'code' => 'HIU'
            ],
            [
                'name' => 'caballo métrico',
                'code' => 'HJ'
            ],
            [
                'name' => 'cien kilogramos',
                'code' => 'HK'
            ],
            [
                'name' => 'cien pies (lineales)',
                'code' => 'HL'
            ],
            [
                'name' => 'hectolitro',
                'code' => 'HLT'
            ],
            [
                'name' => 'milla por hora',
                'code' => 'HM'
            ],
            [
                'name' => 'millones de metros cúbicos',
                'code' => 'HMQ'
            ],
            [
                'name' => 'hectómetro',
                'code' => 'HMT'
            ],
            [
                'name' => 'milímetro convencional de mercurio',
                'code' => 'HN'
            ],
            [
                'name' => 'cien onzas troy',
                'code' => 'HO'
            ],
            [
                'name' => 'milímetro convencional de agua',
                'code' => 'HP'
            ],
            [
                'name' => 'hectolitro de alcohol puro',
                'code' => 'HPA'
            ],
            [
                'name' => 'cien pies cuadrados',
                'code' => 'HS'
            ],
            [
                'name' => 'media hora',
                'code' => 'HT'
            ],
            [
                'name' => 'hertz',
                'code' => 'HTZ'
            ],
            [
                'name' => 'hora',
                'code' => 'HUR'
            ],
            [
                'name' => 'cien yardas',
                'code' => 'HY'
            ],
            [
                'name' => 'pulgada libra',
                'code' => 'IA'
            ],
            [
                'name' => 'contar por pulgada',
                'code' => 'IC'
            ],
            [
                'name' => 'persona',
                'code' => 'IE'
            ],
            [
                'name' => 'pulgadas de agua',
                'code' => 'IF'
            ],
            [
                'name' => 'columna pulgada',
                'code' => 'II'
            ],
            [
                'name' => 'pulgada por minuto',
                'code' => 'IL'
            ],
            [
                'name' => 'impresión',
                'code' => 'IM'
            ],
            [
                'name' => 'pulgada',
                'code' => 'INH'
            ],
            [
                'name' => 'pulgada cuadrada',
                'code' => 'INK'
            ],
            [
                'name' => 'pulgada en cubos',
                'code' => 'INQ'
            ],
            [
                'name' => 'póliza de seguros',
                'code' => 'IP'
            ],
            [
                'name' => 'conteo por centímetro',
                'code' => 'IT'
            ],
            [
                'name' => 'pulgada por segundo (velocidad lineal)',
                'code' => 'IU'
            ],
            [
                'name' => 'pulgada por segundo al cuadrado (aceleración)',
                'code' => 'IV'
            ],
            [
                'name' => 'julios por kilogramo',
                'code' => 'J2'
            ],
            [
                'name' => 'jumbo',
                'code' => 'JB'
            ],
            [
                'name' => 'joule por kelvin',
                'code' => 'JE'
            ],
            [
                'name' => 'jarra',
                'code' => 'JG'
            ],
            [
                'name' => 'megajulio por kilogramo',
                'code' => 'JK'
            ],
            [
                'name' => 'megajulio por metro cúbico',
                'code' => 'JM'
            ],
            [
                'name' => 'articulación',
                'code' => 'JO'
            ],
            [
                'name' => 'joule',
                'code' => 'JOU'
            ],
            [
                'name' => 'tarro',
                'code' => 'JR'
            ],
            [
                'name' => 'demanda de kilovatios',
                'code' => 'K1'
            ],
            [
                'name' => 'kilovoltios amperios reactivos de demanda',
                'code' => 'K2'
            ],
            [
                'name' => 'kilovoltio amperio hora reactiva',
                'code' => 'K3'
            ],
            [
                'name' => 'amperios kilovoltios (reactivos)',
                'code' => 'K5'
            ],
            [
                'name' => 'kilolitro',
                'code' => 'K6'
            ],
            [
                'name' => 'pastel',
                'code' => 'KA'
            ],
            [
                'name' => 'kilocharacter',
                'code' => 'KB'
            ],
            [
                'name' => 'kilobar',
                'code' => 'KBA'
            ],
            [
                'name' => 'kilogramo decimal',
                'code' => 'KD'
            ],
            [
                'name' => 'kelvin',
                'code' => 'KEL'
            ],
            [
                'name' => 'kilopacket',
                'code' => 'KF'
            ],
            [
                'name' => 'barrilete',
                'code' => 'KG'
            ],
            [
                'name' => 'kilogramo',
                'code' => 'KGM'
            ],
            [
                'name' => 'kilogramo por segundo',
                'code' => 'KGS'
            ],
            [
                'name' => 'kilohercio',
                'code' => 'KHZ'
            ],
            [
                'name' => 'Kilogramo por milímetro de ancho',
                'code' => 'KI'
            ],
            [
                'name' => 'kilosegmento',
                'code' => 'KJ'
            ],
            [
                'name' => 'kilojoule',
                'code' => 'KJO'
            ],
            [
                'name' => 'kilogramo por metro',
                'code' => 'KL'
            ],
            [
                'name' => 'kilómetro por hora',
                'code' => 'KMH'
            ],
            [
                'name' => 'kilometro cuadrado',
                'code' => 'KMK'
            ],
            [
                'name' => 'kilogramo por metro cúbico',
                'code' => 'KMQ'
            ],
            [
                'name' => 'kilogramo de nitrógeno',
                'code' => 'KNI'
            ],
            [
                'name' => 'kilogramo de sustancia nombrada',
                'code' => 'KNS'
            ],
            [
                'name' => 'nudo',
                'code' => 'KNT'
            ],
            [
                'name' => 'Milliequivalencia de potasa cáustica por gramo de producto.',
                'code' => 'KO'
            ],
            [
                'name' => 'kilopascal',
                'code' => 'KPA'
            ],
            [
                'name' => 'kilogramo de hidróxido de potasio (potasa cáustica)',
                'code' => 'KPH'
            ],
            [
                'name' => 'kilogramo de óxido de potasio',
                'code' => 'KPO'
            ],
            [
                'name' => 'kilogramo de pentóxido de fósforo (anhídrido fosfórico)',
                'code' => 'KPP'
            ],
            [
                'name' => 'KilorÃ¶ntgen',
                'code' => 'KR'
            ],
            [
                'name' => 'mil libras por pulgada cuadrada',
                'code' => 'KS'
            ],
            [
                'name' => 'kilogramo de sustancia 90% seca',
                'code' => 'KSD'
            ],
            [
                'name' => 'kilogramo de hidróxido de sodio (soda cáustica)',
                'code' => 'KSH'
            ],
            [
                'name' => 'equipo',
                'code' => 'KT'
            ],
            [
                'name' => 'kilómetro',
                'code' => 'KTM'
            ],
            [
                'name' => 'kilotonne',
                'code' => 'KTN'
            ],
            [
                'name' => 'kilogramo de uranio',
                'code' => 'KUR'
            ],
            [
                'name' => 'kilovoltio – ampere',
                'code' => 'KVA'
            ],
            [
                'name' => 'kilovar',
                'code' => 'KVR'
            ],
            [
                'name' => 'kilovoltio',
                'code' => 'KVT'
            ],
            [
                'name' => 'kilogramos por milímetro',
                'code' => 'KW'
            ],
            [
                'name' => 'kilovatios hora',
                'code' => 'KWH'
            ],
            [
                'name' => 'kilovatio',
                'code' => 'KWT'
            ],
            [
                'name' => 'mililitro por kilogramo',
                'code' => 'KX'
            ],
            [
                'name' => 'litro por minuto',
                'code' => 'L2'
            ],
            [
                'name' => 'libra por pulgada cúbica',
                'code' => 'LA'
            ],
            [
                'name' => 'libra',
                'code' => 'LBR'
            ],
            [
                'name' => 'libra troy',
                'code' => 'LBT'
            ],
            [
                'name' => 'centímetro lineal',
                'code' => 'LC'
            ],
            [
                'name' => 'litro por día',
                'code' => 'LD'
            ],
            [
                'name' => 'lite',
                'code' => 'LE'
            ],
            [
                'name' => 'hoja',
                'code' => 'LEF'
            ],
            [
                'name' => 'pie lineal',
                'code' => 'LF'
            ],
            [
                'name' => 'hora de trabajo',
                'code' => 'LH'
            ],
            [
                'name' => 'pulgada lineal',
                'code' => 'LI'
            ],
            [
                'name' => 'spray grande',
                'code' => 'LJ'
            ],
            [
                'name' => 'enlazar',
                'code' => 'LK'
            ],
            [
                'name' => 'metro lineal',
                'code' => 'LM'
            ],
            [
                'name' => 'longitud',
                'code' => 'LN'
            ],
            [
                'name' => 'mucho',
                'code' => 'LO'
            ],
            [
                'name' => 'libra liquida',
                'code' => 'LP'
            ],
            [
                'name' => 'litro de alcohol puro',
                'code' => 'LPA'
            ],
            [
                'name' => 'capa',
                'code' => 'LR'
            ],
            [
                'name' => 'Suma global',
                'code' => 'LS'
            ],
            [
                'name' => 'ton (Reino Unido) o longton (EE. UU.)',
                'code' => 'LTN'
            ],
            [
                'name' => 'litro',
                'code' => 'LTR'
            ],
            [
                'name' => 'lumen',
                'code' => 'LUM'
            ],
            [
                'name' => 'lux',
                'code' => 'LUX'
            ],
            [
                'name' => 'yarda lineal por libra',
                'code' => 'LX'
            ],
            [
                'name' => 'yarda lineal',
                'code' => 'LY'
            ],
            [
                'name' => 'cinta magnética',
                'code' => 'M0'
            ],
            [
                'name' => 'miligramos por litro',
                'code' => 'M1'
            ],
            [
                'name' => 'valor monetario',
                'code' => 'M4'
            ],
            [
                'name' => 'microcurie',
                'code' => 'M5'
            ],
            [
                'name' => 'micropulgada',
                'code' => 'M7'
            ],
            [
                'name' => 'millones de Btu por 1000 pies cúbicos',
                'code' => 'M9'
            ],
            [
                'name' => 'máquina por unidad',
                'code' => 'MA'
            ],
            [
                'name' => 'mega litro',
                'code' => 'MAL'
            ],
            [
                'name' => 'megametro',
                'code' => 'MAM'
            ],
            [
                'name' => 'megavatio',
                'code' => 'MAW'
            ],
            [
                'name' => 'mil equivalentes de ladrillo estándar',
                'code' => 'MBE'
            ],
            [
                'name' => 'mil pies de tabla',
                'code' => 'MBF'
            ],
            [
                'name' => 'milibar',
                'code' => 'MBR'
            ],
            [
                'name' => 'microgramo',
                'code' => 'MC'
            ],
            [
                'name' => 'milicurie',
                'code' => 'MCU'
            ],
            [
                'name' => 'aire seco tonelada métrica',
                'code' => 'MD'
            ],
            [
                 'name' => 'miligramo por pie cuadrado por lado',
                'code' => 'MF'
            ],
            [
                'name' => 'miligramo',
                'code' => 'MGM'
            ],
            [
                'name' => 'megahercio',
                'code' => 'MGM'
            ],
            [
                'name' => 'milla cuadrada',
                'code' => 'MIK'
            ],
            [
                'name' => 'mil',
                'code' => 'MIL'
            ],
            [
                'name' => 'minuto',
                'code' => 'MIN'
            ],
            [
                'name' => 'millón',
                'code' => 'MIO'
            ],
            [
                'name' => 'millones de unidades internacionales',
                'code' => 'MIU'
            ],
            [
                'name' => 'miligramo por pulgada cuadrada',
                'code' => 'MK'
            ],
            [
                'name' => 'mil millones',
                'code' => 'MLD'
            ],
            [
                'name' => 'mililitro',
                'code' => 'MLT'
            ],
            [
                'name' => 'milímetro cuadrado',
                'code' => 'MMK'
            ],
            [
                'name' => 'milímetro cúbico',
                'code' => 'MMQ'
            ],
            [
                'name' => 'milímetro',
                'code' => 'MMT'
            ],
            [
                'name' => 'mes',
                'code' => 'LUN'
            ],
            [
                'name' => 'megapascal',
                'code' => 'MPA'
            ],
            [
                'name' => 'mil metros',
                'code' => 'MQ'
            ],
            [
                'name' => 'metro cúbico por hora',
                'code' => 'MQH'
            ],
            [
                'name' => 'metro cúbico por segundo',
                'code' => 'MQS'
            ],
            [
                'name' => 'metro por segundo al cuadrado',
                'code' => 'MSK'
            ],
            [
                'name' => 'estera',
                'code' => 'MT'
            ],
            [
                'name' => 'metro cuadrado',
                'code' => 'MTK'
            ],
            [
                'name' => 'Metro cúbico',
                'code' => 'MTQ'
            ],
            [
                'name' => 'metro',
                'code' => 'MTR'
            ],
            [
                'name' => 'metro por segundo',
                'code' => 'MTS'
            ],
            [
                'name' => 'numero de mults',
                'code' => 'MV'
            ],
            [
                'name' => 'megavolt – ampere',
                'code' => 'MVA'
            ],
            [
                'name' => 'megavatios hora (1000 kW.h)',
                'code' => 'MWH'
            ],
            [
                'name' => 'calorías de la pluma',
                'code' => 'N1'
            ],
            [
                'name' => 'número de líneas',
                'code' => 'N2'
            ],
            [
                'name' => 'punto de impresión',
                'code' => 'N3'
            ],
            [
                'name' => 'miligramo por kilogramo',
                'code' => 'NA'
            ],
            [
                'name' => 'número de artículos',
                'code' => 'NAR'
            ],
            [
                'name' => 'barcaza',
                'code' => 'NB'
            ],
            [
                'name' => 'número de bobinas',
                'code' => 'NBB'
            ],
            [
                'name' => 'coche',
                'code' => 'NC'
            ],
            [
                'name' => 'número de celdas',
                'code' => 'NCL'
            ],
            [
                'name' => 'barril neto',
                'code' => 'ND'
            ],
            [
                'name' => 'litro neto',
                'code' => 'NE'
            ],
            [
                'name' => 'newton',
                'code' => 'NEW'
            ],
            [
                'name' => 'mensaje',
                'code' => 'NF'
            ],
            [
                'name' => 'galón neto (nosotros)',
                'code' => 'NG'
            ],
            [
                'name' => 'hora del mensaje',
                'code' => 'NH'
            ],
            [
                'name' => 'galón imperial neto',
                'code' => 'NI'
            ],
            [
                'name' => 'número de unidades internacionales',
                'code' => 'NIU'
            ],
            [
                'name' => 'número de pantallas',
                'code' => 'NJ'
            ],
            [
                'name' => 'carga',
                'code' => 'NL'
            ],
            [
                'name' => 'milla nautica',
                'code' => 'MNI'
            ],
            [
                'name' => 'número de paquetes',
                'code' => 'NMP'
            ],
            [
                'name' => 'entrenar',
                'code' => 'NN'
            ],
            [
                'name' => 'número de parcelas',
                'code' => 'NPL'
            ],
            [
                'name' => 'numero de pares',
                'code' => 'NPR'
            ],
            [
                'name' => 'numero de partes',
                'code' => 'TNP'
            ],
            [
                'name' => 'mho',
                'code' => 'NQ'
            ],
            [
                'name' => 'micromho',
                'code' => 'NR'
            ],
            [
                'name' => 'número de rollos',
                'code' => 'NRL'
            ],
            [
                'name' => 'tonelada neta',
                'code' => 'NT'
            ],
            [
                'name' => 'registro neto de toneladas',
                'code' => 'NTT'
            ],
            [
                'name' => 'medidor de newton',
                'code' => 'NU'
            ],
            [
                'name' => 'vehículo',
                'code' => 'NV'
            ],
            [
                'name' => 'parte por mil',
                'code' => 'NX'
            ],
            [
                'name' => 'libra por aire seco tonelada métrica',
                'code' => 'NY'
            ],
            [
                'name' => 'panel',
                'code' => 'OA'
            ],
            [
                'name' => 'ohm',
                'code' => 'OHM'
            ],
            [
                'name' => 'onza por yarda cuadrada',
                'code' => 'EN'
            ],
            [
                'name' => 'onza',
                'code' => 'ONZ'
            ],
            [
                'name' => 'Dos paquetes',
                'code' => 'OP'
            ],
            [
                'name' => 'hora extra',
                'code' => 'OT'
            ],
            [
                'name' => 'onza av',
                'code' => 'ONZ'
            ],
            [
                'name' => 'onza líquida (US)',
                'code' => 'OZA'
            ],
            [
                'name' => 'onza líquida (Reino Unido)',
                'code' => 'OZI'
            ],
            [
                'name' => 'pagina – electronica',
                'code' => 'P0'
            ],
            [
                'name' => 'por ciento',
                'code' => 'P1'
            ],
            [
                'name' => 'libra por pie',
                'code' => 'P2'
            ],
            [
                'name' => 'paquete de tres',
                'code' => 'P3'
            ],
            [
                'name' => 'paquete de cuatro',
                'code' => 'P4'
            ],
            [
                'name' => 'paquete de cinco',
                'code' => 'P5'
            ],
            [
                'name' => 'paquete de seis',
                'code' => 'P6'
            ],
            [
                'name' => 'paquete de siete',
                'code' => 'P7'
            ],
            [
                'name' => 'paquete de ocho',
                'code' => 'P8'
            ],
            [
                'name' => 'paquete de nueve',
                'code' => 'P9'
            ],
            [
                'name' => 'paquete',
                'code' => 'PA'
            ],
            [
                'name' => 'pascal',
                'code' => 'PAL'
            ],
            [
                'name' => 'par de pulgadas',
                'code' => 'PB'
            ],
            [
                'name' => 'almohadilla',
                'code' => 'PD'
            ],
            [
                'name' => 'equivalente en libras',
                'code' => 'PE'
            ],
            [
                'name' => 'palet (ascensor)',
                'code' => 'PF'
            ],
            [
                'name' => 'plato',
                'code' => 'PG'
            ],
            [
                'name' => 'galón de prueba',
                'code' => 'PGL'
            ],
            [
                'name' => 'tono',
                'code' => 'PI'
            ],
            [
                'name' => 'paquete',
                'code' => 'PK'
            ],
            [
                'name' => 'cubo',
                'code' => 'PL'
            ],
            [
                'name' => 'porcentaje de libra',
                'code' => 'PM'
            ],
            [
                'name' => 'libra neta',
                'code' => 'PN'
            ],
            [
                'name' => 'libra por pulgada de longitud',
                'code' => 'PO'
            ],
            [
                'name' => 'página por pulgada',
                'code' => 'PQ'
            ],
            [
                'name' => 'par',
                'code' => 'PR'
            ],
            [
                'name' => 'fuerza de libra por pulgada cuadrada',
                'code' => 'PD'
            ],
            [
                'name' => 'pinta',
                'code' => 'PT'
            ],
            [
                'name' => 'pinta seca',
                'code' => 'PTD'
            ],
            [
                'name' => 'pinta (Reino Unido)',
                'code' => 'PTI'
            ],
            [
                'name' => 'pinta liquida (US)',
                'code' => 'PTL'
            ],
            [
                'name' => 'bandeja / paquete de bandeja',
                'code' => 'PU'
            ],
            [
                'name' => 'media pinta (US)',
                'code' => 'PV'
            ],
            [
                'name' => 'libra por pulgada de ancho',
                'code' => 'PW'
            ],
            [
                'name' => 'Peck Dry (US)',
                'code' => 'PY'
            ],
            [
                'name' => 'Peck Dry (Reino Unido)',
                'code' => 'PZ'
            ],
            [
                'name' => 'comida',
                'code' => 'Q3'
            ],
            [
                'name' => 'página – facsímil',
                'code' => 'QA'
            ],
            [
                'name' => 'cuarto (de un año)',
                'code' => 'QAN'
            ],
            [
                'name' => 'página – copia impresa',
                'code' => 'QB'
            ],
            [
                'name' => 'cuarto de docena',
                'code' => 'QD'
            ],
            [
                'name' => 'un cuarto de hora',
                'code' => 'QH'
            ],
            [
                'name' => 'cuarto de kilogramo',
                'code' => 'QK'
            ],
            [
                'name' => 'mano de papel',
                'code' => 'QR'
            ],
            [
                'name' => 'cuarto de galón (US)',
                'code' => 'QT'
            ],
            [
                'name' => 'cuarto seco (EE. UU.)',
                'code' => 'QTD'
            ],
            [
                'name' => 'cuarto de galón (Reino Unido)',
                'code' => 'QTI'
            ],
            [
                'name' => 'cuarto líquido (US)',
                'code' => 'QTL'
            ],
            [
                'name' => 'cuarto (UK)',
                'code' => 'QTR'
            ],
            [
                'name' => 'pica',
                'code' => 'R1'
            ],
            [
                'name' => 'caloría',
                'code' => 'R4'
            ],
            [
                'name' => 'mil metros cúbicos',
                'code' => 'R9'
            ],
            [
                'name' => 'estante',
                'code' => 'RA'
            ],
            [
                'name' => 'barra',
                'code' => 'RD'
            ],
            [
                'name' => 'anillo',
                'code' => 'RG'
            ],
            [
                'name' => 'hora de funcionamiento o de funcionamiento',
                'code' => 'RH'
            ],
            [
                'name' => 'medida métrica rollo',
                'code' => 'RK'
            ],
            [
                'name' => 'carrete',
                'code' => 'RL'
            ],
            [
                'name' => 'resma',
                'code' => 'RM'
            ],
            [
                'name' => 'medida métrica de resma',
                'code' => 'RN'
            ],
            [
                'name' => 'rodar',
                'code' => 'RO'
            ],
            [
                'name' => 'libra por resma',
                'code' => 'RP'
            ],
            [
                'name' => 'revoluciones por minuto',
                'code' => 'RPM'
            ],
            [
                'name' => 'revoluciones por segundo',
                'code' => 'RPS'
            ],
            [
                'name' => 'Reiniciar',
                'code' => 'RS'
            ],
            [
                'name' => 'ingreso tonelada milla',
                'code' => 'RT'
            ],
            [
                'name' => 'correr',
                'code' => 'RU'
            ],
            [
                'name' => 'pie cuadrado por segundo',
                'code' => 'S3'
            ],
            [
                'name' => 'metro cuadrado por segundo',
                'code' => 'S4'
            ],
            [
                'name' => 'sesenta cuartos de pulgada',
                'code' => 'S5'
            ],
            [
                'name' => 'sesión',
                'code' => 'S6'
            ],
            [
                'name' => 'unidad de almacenamiento',
                'code' => 'S7'
            ],
            [
                'name' => 'unidad de publicidad estándar',
                'code' => 'S8'
            ],
            [
                'name' => 'saco',
                'code' => 'SA'
            ],
            [
                'name' => 'medio año (6 meses)',
                'code' => 'SAN'
            ],
            [
                'name' => 'Puntuación',
                'code' => 'OCS'
            ],
            [
                'name' => 'escrúpulo',
                'code' => 'SCR'
            ],
            [
                'name' => 'libra solida',
                'code' => 'SD'
            ],
            [
                'name' => 'sección',
                'code' => 'SE'
            ],
            [
                'name' => 'segundo',
                'code' => 'SEC'
            ],
            [
                'name' => 'conjunto',
                'code' => 'SET'
            ],
            [
                'name' => 'segmento',
                'code' => 'SG'
            ],
            [
                'name' => 'tonelada de envío',
                'code' => 'SHT'
            ],
            [
                'name' => 'siemens',
                'code' => 'SIE'
            ],
            [
                'name' => 'camión cisterna dividido',
                'code' => 'SK'
            ],
            [
                'name' => 'hoja de deslizamiento',
                'code' => 'SL'
            ],
            [
                'name' => 'milla (milla estatutaria)',
                'code' => 'SMI'
            ],
            [
                'name' => 'varilla cuadrada',
                'code' => 'SN'
            ],
            [
                'name' => 'carrete',
                'code' => 'SO'
            ],
            [
                'name' => 'paquete de estante',
                'code' => 'SP'
            ],
            [
                'name' => 'cuadrado',
                'code' => 'SQ'
            ],
            [
                'name' => 'tira',
                'code' => 'SR'
            ],
            [
                'name' => 'hoja métrica medida',
                'code' => 'SS'
            ],
            [
                'name' => 'corto estándar (7200 partidos)',
                'code' => 'SST'
            ],
            [
                'name' => 'hoja',
                'code' => 'ST'
            ],
            [
                'name' => 'piedra (Reino Unido)',
                'code' => 'ITS'
            ],
            [
                'name' => 'tonelada (US) o tonelada corta (UK / US)',
                'code' => 'STN'
            ],
            [
                'name' => 'patinar',
                'code' => 'SV'
            ],
            [
                'name' => 'madeja',
                'code' => 'SO'
            ],
            [
                'name' => 'envío',
                'code' => 'SX'
            ],
            [
                'name' => 'Línea de telecomunicaciones en servicio.',
                'code' => 'T0'
            ],
            [
                'name' => 'mil libras brutas',
                'code' => 'T1'
            ],
            [
                'name' => 'mil piezas',
                'code' => 'T3'
            ],
            [
                'name' => 'bolsa de mil',
                'code' => 'T4'
            ],
            [
                'name' => 'caja de mil',
                'code' => 'T5'
            ],
            [
                'name' => 'mil galones (US)',
                'code' => 'T6'
            ],
            [
                'name' => 'mil impresiones',
                'code' => 'T7'
            ],
            [
                'name' => 'mil pulgadas lineales',
                'code' => 'T8'
            ],
            [
                'name' => 'décimo pie cúbico',
                'code' => 'TA'
            ],
            [
                'name' => 'Kiloampere hora (mil amperios hora)',
                'code' => 'TAH'
            ],
            [
                'name' => 'camion',
                'code' => 'TC'
            ],
            [
                'name' => 'termia',
                'code' => 'TD'
            ],
            [
                'name' => 'totalizador',
                'code' => 'TE'
            ],
            [
                'name' => 'diez metros cuadrados',
                'code' => 'TF'
            ],
            [
                'name' => 'mil pulgadas cuadradas',
                'code' => 'TI'
            ],
            [
                'name' => 'mil centímetros cuadrados',
                'code' => 'TJ'
            ],
            [
                'name' => 'tanque rectangular',
                'code' => 'TK'
            ],
            [
                'name' => 'mil pies (lineales)',
                'code' => 'TL'
            ],
            [
                'name' => 'estaño',
                'code' => 'TN'
            ],
            [
                'name' => 'tonelada (tonelada métrica)',
                'code' => 'TNE'
            ],
            [
                'name' => 'paquete de diez',
                'code' => 'TP'
            ],
            [
                'name' => 'diez pares',
                'code' => 'TPR'
            ],
            [
                'name' => 'mil pies',
                'code' => 'TQ'
            ],
            [
                'name' => 'mil metros cúbicos por día',
                'code' => 'TQD'
            ],
            [
                'name' => 'diez pies cuadrados',
                'code' => 'TR'
            ],
            [
                'name' => 'trillón (EUR)',
                'code' => 'TRL'
            ],
            [
                'name' => 'mil pies cuadrados',
                'code' => 'TS'
            ],
            [
                'name' => 'tonelada de sustancia 90% seca',
                'code' => 'TSD'
            ],
            [
                'name' => 'tonelada de vapor por hora',
                'code' => 'TSH'
            ],
            [
                'name' => 'mil metros lineales',
                'code' => 'TT'
            ],
            [
                'name' => 'tubo',
                'code' => 'TU'
            ],
            [
                'name' => 'mil kilogramos',
                'code' => 'TV'
            ],
            [
                'name' => 'mil hojas',
                'code' => 'TW'
            ],
            [
                'name' => 'tanque cilíndrico',
                'code' => 'TY'
            ],
            [
                'name' => 'tratamiento',
                'code' => 'U1'
            ],
            [
                'name' => 'tableta',
                'code' => 'U2'
            ],
            [
                'name' => 'torr',
                'code' => 'UA'
            ],
            [
                'name' => 'Línea de telecomunicaciones en servicio promedio.',
                'code' => 'UB'
            ],
            [
                'name' => 'puerto de telecomunicaciones',
                'code' => 'UC'
            ],
            [
                'name' => 'décimo minuto',
                'code' => 'UD'
            ],
            [
                'name' => 'décima hora',
                'code' => 'UE'
            ],
            [
                'name' => 'uso por línea de telecomunicación promedio',
                'code' => 'UF'
            ],
            [
                'name' => 'diez mil yardas',
                'code' => 'UH'
            ],
            [
                'name' => 'millones de unidades',
                'code' => 'UM'
            ],
            [
                'name' => 'voltio amperio por kilogramo',
                'code' => 'VA'
            ],
            [
                'name' => 'frasco',
                'code' => 'VI'
            ],
            [
                'name' => 'voltio',
                'code' => 'VLT'
            ],
            [
                'name' => 'abultar',
                'code' => 'VQ'
            ],
            [
                'name' => 'visitar',
                'code' => 'VS'
            ],
            [
                'name' => 'kilo mojado',
                'code' => 'W2'
            ],
            [
                'name' => 'dos semanas',
                'code' => 'W4'
            ],
            [
                'name' => 'vatio por kilogramo',
                'code' => 'WA'
            ],
            [
                'name' => 'libra mojada',
                'code' => 'WB'
            ],
            [
                'name' => 'cable',
                'code' => 'WCD'
            ],
            [
                'name' => 'tonelada mojada',
                'code' => 'WE'
            ],
            [
                'name' => 'weber',
                'code' => 'WEB'
            ],
            [
                'name' => 'semana',
                'code' => 'WEE'
            ],
            [
                'name' => 'galon de vino',
                'code' => 'WG'
            ],
            [
                'name' => 'rueda',
                'code' => 'WH'
            ],
            [
                'name' => 'vatios hora',
                'code' => 'WHR'
            ],
            [
                'name' => 'peso por pulgada cuadrada',
                'code' => 'WI'
            ],
            [
                'name' => 'mes de trabajo',
                'code' => 'WM'
            ],
            [
                'name' => 'envolver',
                'code' => 'WR'
            ],
            [
                'name' => 'estándar',
                'code' => 'WSD'
            ],
            [
                'name' => 'vatio',
                'code' => 'WTT'
            ],
            [
                'name' => 'mililitro de agua',
                'code' => 'WW'
            ],
            [
                'name' => 'cadena',
                'code' => 'X1'
            ],
            [
                'name' => 'yarda cuadrada',
                'code' => 'YDK'
            ],
            [
                'name' => 'Yarda cúbica',
                'code' => 'YDQ'
            ],
            [
                'name' => 'cien yardas lineales',
                'code' => 'YL'
            ],
            [
                'name' => 'yarda',
                'code' => 'YRD'
            ],
            [
                'name' => 'diez yardas',
                'code' => 'YT'
            ],
            [
                'name' => 'van de elevación',
                'code' => 'Z1'
            ],
            [
                'name' => 'pecho',
                'code' => 'Z2'
            ],
            [
                'name' => 'barril',
                'code' => 'Z3'
            ],
            [
                'name' => 'pipa',
                'code' => 'Z4'
            ],
            [
                'name' => 'arrastrar',
                'code' => 'Z5'
            ],
            [
                'name' => 'punto de conferencia',
                'code' => 'Z6'
            ],
            [
                'name' => 'línea de noticias de ágata',
                'code' => 'Z8'
            ],
            [
                'name' => 'página',
                'code' => 'ZP'
            ],
            [
                'name' => 'mutuamente definido',
                'code' => 'ZZ'
            ]
        ];
        foreach($measures as $mea){
            Unit_measure::create($mea);
        }
    }
}

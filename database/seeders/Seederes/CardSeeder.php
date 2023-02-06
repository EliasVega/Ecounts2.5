<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            [
                'name' =>'No Aplica',
            ],
            [
                'name' =>'VISA',
            ],
            [
                'name' =>'MASTER CARD',
            ],
            [
                'name' =>'AMERICAN ESPRESS',
            ],
        ];
        foreach ($cards as $card) {
            Card::create($card);
        }
    }
}

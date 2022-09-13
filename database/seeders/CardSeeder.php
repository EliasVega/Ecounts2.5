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
        $card = new Card();
        $card->name = 'No Aplica';
        $card->save();

        $card = new Card();
        $card->name = 'VISA';
        $card->save();

        $card = new Card();
        $card->name = 'MASTER CARD';
        $card->save();

        $card = new Card();
        $card->name = 'AMERICAN ESPRESS';
        $card->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";');
        \DB::table('games')->insert([
			[
                'id'            => '1',
                'name'        => 'BAMBOO RUSH',
                'url'           => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
                'description'   => '',
                'url_image'    => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
                'status'        => '1'
            ],
			[
                'id'            => '2',
                'name'        => 'REELS OF WEALTH',
                'url'           => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
                'description'   => '',
                'url_image'    => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
                'status'        => '1'
            ],
            [
                'id'            => '3',
                'name'        => 'DRAGON & PHOENIX',
                'url'           => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
                'description'   => '',
                'url_image'    => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
                'status'        => '1'
            ],
            [
                'id'            => '4',
                'name'        => 'TAKE THE BANK',
                'url'           => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
                'description'   => '',
                'url_image'    => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
                'status'        => '1'
            ],
            [
                'id'            => '5',
                'name'        => 'CAISHEN’S ARRIVAL',
                'url'           => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
                'description'   => '',
                'url_image'    => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
                'status'        => '1'
            ],
            [
                'id'            => '6',
                'name'        => 'GEMMED!',
                'url'           => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
                'description'   => '',
                'url_image'    => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
                'status'        => '1'
            ],
	    ]);
        Game::factory(30)->create();
    }
}

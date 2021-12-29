<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Game;

class GamesModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_shows_the_games_list()
    {
        Game::factory(1)->create();
        $response = $this->get('/games')
        ->assertOk();
        $games = Game::paginate(10);
        $response->assertViewIs('games.index')
        ->assertViewHas('games', $games);
    }

    public function test_it_create_a_new_game()
    {
        $this->post('games',[
            'name'        => 'BAMBOO RUSH',
            'url'           => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'description'   => 'NULO?',
            'url_image'    => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'status'        => '1'
        ])->assertStatus(302)
        ->assertRedirect('/games/2');

        $game = Game::find(2);

        $this->get('games/2')->assertSee('BAMBOO RUSH')->assertViewHas('game', $game);
    }

    public function test_it_update_a_game()
    {
        Game::factory(1)->create();
        $this->put('/games/3',[
            'name'        => 'BAMBOO RUSH',
            'url'         => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
            'description' => '',
            'url_image'   => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
            'status'      => '1'
        ])->assertStatus(302)
        ->assertRedirect('/games/3');

        $game = Game::find(3);

        $this->get('games/3')->assertSee('BAMBOO RUSH')->assertViewHas('game', $game);
    }

    public function test_it_delete_a_game(){
        $this->withoutExceptionHandling();
        $game = Game::factory(1)->create();
        $this->delete('/games/4')->assertRedirect('/games');
        $this->get('games')->assertDontSee($game->first()->name);

    }
}

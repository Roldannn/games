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

    public function it_shows_the_games_list()
    {
        Game::factory(50)->create();
        $this->get('/')
        ->assertStatus(200);
    }
}

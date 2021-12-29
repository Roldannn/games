<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::paginate(10);
        $title = "Listado de juegos";
        return view('games.index', compact('title', 'games'));

    }

    public function create()
    {
        return view('games.create');
    }

    public function store(GameRequest $request){
        $game = Game::create($request->all());
        return redirect()->route('games.show', $game);
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }


    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(GameRequest $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('games.show', $game);
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}

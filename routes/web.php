<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GameController::class, 'index'])->name('games.index');

Route::get('games/create', [GameController::class, 'create'])->name('games.create');

Route::post('games/store', [GameController::class, 'store'])->name('games.store');

Route::get('games/show/{game}', [GameController::class, 'show'])->name('games.show');

Route::get('games/edit/{game}', [GameController::class, 'edit'])->name('games.edit');

Route::put('games/{game}', [GameController::class, 'update'])->name('games.update');

Route::delete('games/{game}', [GameController::class, 'delete'])->name('games.delete');

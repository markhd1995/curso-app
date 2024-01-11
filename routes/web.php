<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
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

Route::get('/', function () {
    return view('welcome');
});











//::::::::::::::::::::::::::VARIABLES:::::::::::::::::::::::::

//enviar variables por url, no hay necesidad que haya una vista


Route::get('/games',[GamesController::class,'index'])->name('games');

// Ruta para crear juegos
Route::get('/games/create',[GamesController::class,'create'])->name('gamesCreate');


//ENVIO de datos con parametros
Route::get('/games/{name_game}/{categoria?}',[GamesController::class,'help']);

//cuando envian un post formulario para crear
Route::post('/games/storeVideogame',[GamesController::class,'storeVideogame'])->name('createVideogame');

//ruta  Editar juegos
Route::get('/editar/{game_id}',[GamesController::class,'editarVideogame'])->name('editarGame');



//cuando envian un post formulario para editar
Route::post('/games/updateVideogame',[GamesController::class,'updateVideogame'])->name('updateVideogame');



//ruta  Eliminar juegos
Route::get('/delete/{game_id}',[GamesController::class,'delete'])->name('deleteGame');

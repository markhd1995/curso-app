<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Videogame;
use App\Models\categoria;

class GamesController extends Controller
{
 public function index(){
   // $videogames=array('Fifa 22','NBA 22','Mario Kart','Super Mario','Bomberman');
    //return view('index',['ArrayVideoGames'=>$videogames]);

    //:::::IMPRIMIR DE LA BD::::::

//paso 1 importar modelo a usar

//paso 2 definir un variable donde alojar los datos

  $videogames= Videogame::orderBy('id','desc')->get();

  //paso 3 retornar los datos 
    
    return view('index',['games'=>$videogames]);
 }


public function create(){

   $categoriasGames= categoria::all();//todos

    return view('create',['categorias'=>$categoriasGames]);
    
 }

 public function help($name_game,$categoria=null){
    $fecha= Now();
    return view('show',['NameVideoGame'=>$name_game,
                         'Categoria'=>$categoria,
                        'FechaActual'=>$fecha]);
    
   
 }




 public function storeVideogame(Request $request){
// validaciones

$request->validate([
   'name_game'=>'required|min:3|max:15'

]);



   $game=new Videogame;

   $game->name=$request->name_game;
   $game->category_id=$request->categoria_id;
   $game->active=1;
   $game->save();

   return redirect()->route('games');

 }


 public  function editarVideogame($game_id){

$game=Videogame::find($game_id);

   $categoriasGames= categoria::all();//todos

    return view('update',['categorias'=>$categoriasGames,'game'=>$game]);
    

 }



 public function updateVideogame(Request $request){

   // validaciones

$request->validate([
   'name_game'=>'required|min:3|max:15'

]);


   $game=Videogame::find($request->game_id);

   $game->name=$request->name_game;
   $game->category_id=$request->categoria_id;
   $game->active=1;
   $game->save();

   return redirect()->route('games');

 }


 public function delete($game_id){


   $game=Videogame::find($game_id);
  $game->delete();
  return redirect()->route('games');
  
 }


}

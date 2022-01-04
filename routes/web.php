<?php

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


Route::get('/home.homePage',function(){
    return view('home.homePage');
})->name("home.homePage");

Route::get("/comics.comicsPage",function(){

  //leggere i dati
  $dati_fumetti = config("comics");

    //passo i dati alla view
    return view("comics.comicsPage",[
    //creo una hiave
    "lista_fumetti" => $dati_fumetti
   ]);

})->name("comics.comicsPage");

/* Route::get('/characters.charactersPage',function(){
    return view('characters.charactersPage');
})->name("characters.charactersPage");

 */
Route::get('/dettagli/{id}',function($id){
    $dati_fumetti = config("comics");
    if(is_numeric($id) && $id >= 0 && $id < count($dati_fumetti)){
      
        $fumetto = $dati_fumetti[$id];
        
        return view('products.details',[
            "fumetto"=> $fumetto
        ]);

    } else
    {
        abort('404');
    }


   
})->name("products.details");


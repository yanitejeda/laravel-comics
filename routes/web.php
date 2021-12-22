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
  $dati_fumetti = config("comics");
  /* dump($dati_fumetti) */;
    return view("comics.comicsPage",[
    "lista_fumetti" => $dati_fumetti
    
   ]);
})->name("comics.comicsPage");

Route::get('/characters.charactersPage',function(){
    return view('characters.charactersPage');
})->name("characters.charactersPage");
/* 
Route::get('/comics.comicsPage',function(){
    return view('comics.comicsPage');
})->name("comics.comicsPage");
 */
Route::get('/movies.moviesPage',function(){
    return view('movies.moviesPage');
})->name("movies.moviesPage");

Route::get('/tv.tvPage',function(){
    return view('tv.tvPage');
})->name("tv.tvPage");

Route::get('/games.gamesPage',function(){
    return view('games.gamesPage');
})->name("games.gamesPage");

Route::get('/collectibles.collectiblesPage',function(){
    return view('collectibles.collectiblesPage');
})->name("collectibles.collectiblesPage");

Route::get('/videos.videosPage',function(){
    return view('videos.videosPage');
})->name("videos.videosPage");

Route::get('/fans.fansPage',function(){
    return view('fans.fansPage');
})->name("fans.fansPage");

Route::get('/news.newsPage',function(){
    return view('news.newsPage');
})->name("news.newsPage");

Route::get('/shop.shopPage',function(){
    return view('shop.shopPage');
})->name("shop.shopPage");

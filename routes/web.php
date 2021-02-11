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

Route::get('/', function () {

    $pages = ['Home' => '/','Prodotti'=>'prodotti-paste','Contatti'=>'contatti'];
    return view('pages.home.home',compact('pages'));
});

Route::get('prodotti-paste', function () {
    //file_get_contents(path, include_path, context, start, max_length)  legge il contenuto di un file in una stringa e migliora le prestazioni
    $data = file_get_contents('../resources/json/data.json');
    $prodotti = json_decode($data,true);
    $pages = ['Home' => '/','Prodotti'=>'prodotti-paste','Contatti'=>'contatti'];
    return view('pages.prodotti.prodotti', compact('prodotti','pages','data'));
});

Route::get('contatti', function () {
    return view('pages.contatti.contatti');
});
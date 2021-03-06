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

    $pages = ['home' => 'home','prodotti'=>'prodotti','contatti'=>'contatti'];
    $footer = json_decode(file_get_contents('../resources/json/footer.json'),true);
    return view('pages.home.home',compact('pages','footer'));
})->name('home');

Route::get('/prodotti-paste', function () {
    //file_get_contents(path, include_path, context, start, max_length)  legge il contenuto di un file in una stringa e migliora le prestazioni
    $data = file_get_contents('../resources/json/data.json');
    $prodotti = json_decode($data,true);
    $pages = ['home' => 'home','prodotti'=>'prodotti','contatti'=>'contatti'];
    //dd($prodotti['data']);
    //https://laravel.com/docs/7.x/helpers#method-array-where
    // $lunga = Arr::where($prodotti['data'],function($value,$key){
    //    return $value['tipo'] == 'lunga';
    //});
    //$corta = Arr::where($prodotti['data'],function($value,$key){
    //    return $value['tipo'] == 'corta';
    //});
    //$cortissima = Arr::where($prodotti['data'],function($value,$key){
    //    return $value['tipo'] == 'cortissima';
    //});
    $footer = json_decode(file_get_contents('../resources/json/footer.json'),true);
    return view('pages.prodotti.prodotti', compact('prodotti','pages','footer'));
})->name('prodotti');

Route::get( 'prodotti-paste/{id}', function ($id){
    $data = json_decode(file_get_contents('../resources/json/data.json'),true);
    $prodotto = $data['data'][$id];
    $pages = ['home' => 'home','prodotti'=>'prodotti','contatti'=>'contatti'];/* attenzione a collegare il 'name' della route dell'href */
    $footer = json_decode(file_get_contents('../resources/json/footer.json'),true);
    return view('pages.prodotti.prodotto.scheda-prodotto', compact('prodotto','id','pages','footer'));
})->name('prodotto');


Route::get('/contatti', function () {

    $pages = ['home' => 'home','prodotti'=>'prodotti','contatti'=>'contatti'];
    $footer = json_decode(file_get_contents('../resources/json/footer.json'),true);
    return view('pages.contatti.contatti', compact('pages','footer'));
})->name('contatti');
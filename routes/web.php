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
    return view('welcome');
})->name('home');

Route::get('/menus/a-plusieurs','ProductController@menu_plusieurs')->name('menus-a-plusieurs');
Route::get('/menus/mixte','ProductController@mixte')->name('mixte');
Route::get('/menus/maki','ProductController@maki')->name('maki');

Route::get('/menus/sashimi','ProductController@sashimi')->name('sashimi');
Route::get('/menus/chirashi','ProductController@chirashi')->name('chirashi');
Route::get('/menus/temaki','ProductController@temaki')->name('temaki');
Route::get('/menus/sushi','ProductController@sushi')->name('menus-sushi');


Route::get('/plats-chauds/bento','ProductController@bento')->name('bento');
Route::get('/plats-chauds/udon','ProductController@udon')->name('udon');
Route::get('/plats-chauds/gyoza','ProductController@gyoza')->name('gyoza');
Route::get('/plats-chauds/tempura','ProductController@tempura')->name('tempura');
Route::get('/plats-chauds/sushi','ProductController@sushi1')->name('sushi');

Route::get('/entrées/accompagnement','ProductController@accompagnement')->name('accompagnement');
Route::get('/entrées/salades','ProductController@salades')->name('salades');
Route::get('/entrées/tartares','ProductController@tartares')->name('tartares');


Route::get('/la-carte/classique/sushi','ProductController@carte_classique_sushi')->name('carte-classique-sushi');
Route::get('/la-carte/classique/maki','ProductController@carte_classique_maki')->name('carte-classique-maki');
Route::get('/la-carte/classique/brochettes','ProductController@carte_classique_brochette')->name('carte-classique-brochettes');
Route::get('/la-carte/classique/temaki','ProductController@carte_classique_temaki')->name('carte-classique-temaki');

Route::get('dessert','ProductController@dessert')->name('dessert');

Route::get('boisson','ProductController@boisson')->name('boisson');



Route::get('/all','ProductController@all')->name('all');







Route::get('acheter/{id}','ProductController@acheter')->name('acheter');



Route::get('contact','ProductController@contact')->name('contact');

Route::get('add-contact','ProductController@add_contact')->name('add-contact');





Route::get('/la-carte/creatif/Rockets','ProductController@carte_creatif_rockets')->name('carte-rockets');
Route::get('/la-carte/creatif/Trendys','ProductController@carte_creatif_trendys')->name('carte-trendys');
Route::get('/la-carte/creatif/caliwasabis','ProductController@carte_creatif_caliwasabis')->name('carte-caliwasabis');
Route::get('/la-carte/creatif/craps','ProductController@carte_creatif_craps')->name('carte-craps');





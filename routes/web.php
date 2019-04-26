<?php

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
    return redirect()->route('accueil');
});

/* admin */

Route::get('/dashbord','DashbordConroller@index')->name('admin.index');
Route::get('/dashbord/localisation','LocalisationController@index')->name('localisation');
Route::post('/dashbord/localisation','LocalisationController@store');
Route::get('/dashbord/programme','ProgrammesController@index')->name('programmes');
Route::post('/dashbord/programme','ProgrammesController@store');
Route::get('/dashbord/typeappart','TypeAppartController@index')->name('typeappart');
Route::post('/dashbord/typeappart','TypeAppartController@store');
Route::get('/dashbord/appartement','AppartementController@index')->name('appartemente');
Route::post('/dashbord/appartement','AppartementController@store');
Route::get('/dashbord/client','ClientController@index')->name('client');
Route::get('/dashbord/commandes','CommandesController@index')->name('commandes');
Route::get('/dashbord/etapes','EtapesController@index')->name('etapes');
Route::post('/dashbord/etapes','EtapesController@update');
/* client web */
Route::get('/accueil','PagesController@index')->name('accueil');
Route::get('/appartement/{id}','PagesController@show')->name('details');
Route::get('/appartement/type/{id}','PagesController@typeAppart')->name('type');
Route::get('/login','LoginController@index')->name('login');
Route::get('/logout','LoginController@destroy')->name('logout');
Route::post('/login','LoginController@store');
Route::post('/inscription','ComptesController@store');
Route::get('/contact','PagesController@index')->name('contact');
Route::get('/panier','PanierController@index')->name('panier');
Route::get('/panier/add/{id}','PanierController@show')->name('ajouter');
Route::get('/panier/delete/{id}','PanierController@destroy')->name('delete');
Route::get('/panier/commande','CommandesController@create')->name('acheter');
Route::get('/client/commande','EtapesController@create')->name('suivie');
/* Api mobile */


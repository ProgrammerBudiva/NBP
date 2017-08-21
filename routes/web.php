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
    return view('home');
});

//Route::get('/manoir', function(){
//    return view('collections.manoir');
//})->name('manoir');

Route::get('/collection/{keyword}', 'CollectionController@index');
Route::get('/contacts', 'ContactsController@index');
Route::get('/partnership', 'PartnershipController@index');
Route::get('/about', 'AboutController@index');

Route::post('/contacts', 'ContactsController@message');
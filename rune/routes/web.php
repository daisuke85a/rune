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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/rune/edit', function () {
    return view('rune.edit');
});

Route::get('/help', function () {
    return view('help.index');
});
Route::get('/help/edit', function () {
    return view('help.edit');
});
Route::get('/help/create', function () {
    return view('help.create');
});


Route::resources([
    'help_items' =>'HelpItemController',
    'help_histories' =>'HelpHistoryController',
]);

Auth::routes();


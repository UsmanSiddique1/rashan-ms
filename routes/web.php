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
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/////**** Rashan
Route::get('/rashan', 'RashanController@rashan')->name('rashan');
Route::post('/add_rashan', 'RashanController@add_rashan')->name('add_rashan');
Route::get('/rashan_del/{id}', 'RashanController@rashan_del')->name('rashan_del');
Route::post('/give_rashan', 'RashanController@give_rashan')->name('give_rashan');
Route::get('/rashan_list/{id}', 'RashanController@rashan_list')->name('rashan_list');

//// Rashan Item
Route::post('/add_rashan_item', 'RashanController@add_rashan_item')->name('add_rashan_item');
Route::post('edit_rashan_item', 'RashanController@edit_rashan_item')->name('edit_rashan_item');
Route::get('/rashan_item_del/{id}', 'RashanController@rashan_item_del')->name('rashan_item_del');

//// Rashan Given Needy
Route::get('/needies_rashan/{id}', 'RashanController@needies_rashan')->name('needies_rashan');
Route::get('del_needy_rashan/{id}', 'RashanController@del_needy_rashan')->name('del_needy_rashan');


/// All Needies

Route::get('/needies', 'RashanController@needies')->name('needies');
Route::post('/add_needy', 'RashanController@add_needy')->name('add_needy');
Route::post('/update_needy', 'RashanController@update_needy')->name('update_needy');
Route::get('/needy_del/{id}', 'RashanController@needy_del')->name('needy_del');


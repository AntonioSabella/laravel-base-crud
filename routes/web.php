<?php

use Illuminate\Support\Facades\Route;
use App\Comic;

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
    $comics = Comic::get();
    return view('welcome', compact('comics'));
})->name('welcome');

/* Route::get('/', 'PageController@index')->name('home'); */

/* Route::resource('/comics', 'ComicController'); */
Route::get('/comics', 'ComicController@index')->name('comics.index');
Route::get('/comics/create', 'ComicController@create')->name('comics.create');
Route::post('/comics', 'ComicController@store')->name('comics.store');
Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show');
Route::get('/comics/{comic}/edit', 'ComicController@edit')->name('comics.edit');
Route::put('/comics/{comic}', 'ComicController@update')->name('comics.update');
Route::delete('/comics/{comic}', 'ComicController@destroy')->name('comics.destroy');





/* 
model: Comic
migration: comics
controller resources ComicController
seeder ComicSeeder

- title
- description
- thumb
- price
- series
- sale_date
- type


*/

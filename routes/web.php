<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create.blade.php something great!
|
*/

Route::get('admin', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/microblading', function () {
    return view('micb');
});
Route::get('/monza', function () {
    return view('monza');
});
Route::get('/galeria', function () {
    return view('galeria');
});

Auth::routes();

Route::get('/tattoos/createtattoo', 'TattoosController@create');
Route::post('/tattoos', 'TattoosController@store');

Route::get('/tatuadores/createtatuadores', 'TatuadorsController@create');
Route::post('/tatuadores', 'TatuadorsController@store');

Route::get('/welcome', 'HomeController@index')->name('home');

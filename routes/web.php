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

Route::get('/', 'PrincipalController@index');
Route::get('nosotros', 'NosotrosController@index');

Route::get('contacto', function () {
    return view('contacto');
});
 
Route::resource('carousel','CarouselController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('contacto','ContactoController');


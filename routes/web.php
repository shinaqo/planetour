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

// Route::get('promociones', function () {
//     return view('promociones');
// });
Route::get('prueba', function () {
    return view('prueba');
}); 

Route::resource('carousel','CarouselController');
Route::resource('contacto','ContactoController');
Route::resource('trabajador','TrabajadorController');
Route::resource('cargo','CargoController');
Route::resource('pais','PaisController');
Route::resource('categoria','CategoriaController');
Route::resource('user','UserController');
Route::resource('producto','ProductoController');
Route::resource('productocarousel','ProductoCarouselController');
Route::resource('descripcionproducto','DescripcionProductoController');
Route::resource('destinos','DestinosController');
Route::resource('promociones','PromocionesController');
Route::resource('giras','GirasDeEstudioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


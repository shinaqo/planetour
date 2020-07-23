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
Route::resource('colaborador','ColaboradorController');
Route::resource('colaboradores','ColaboradoresController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('sendemail', function () {

//     $data = array(
//         'name' => "Curso Laravel",
//     );

//     Mail::send('emails.welcome', $data, function ($message) {

//         $message->from('ian.vinales26@gmail.com', 'Curso Laravel');

//         $message->to('ian.vinales26@gmail.com')->subject('test email Curso Laravel');

//     });

//     return "Tú email ha sido enviado correctamente";

// });

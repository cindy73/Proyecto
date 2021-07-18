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

route::get('login', 'UserController@vlogin')->name('login');
route::get('registrar', 'UserController@vregister')->name('registrar');
route::post('newuser', 'UserController@nuevoUsuario')->name('newuser');
route::post('inicarSesion', 'UserController@ValidarUsuario')->name('inicarSesion');


Route::resource('equipo','EquipoController');
Route::resource('jugadores','JugadorController');
Route::resource('horarios','HorarioController');
Route::resource('encuentros','EncuentroController');
Route::resource('estadisticas','GoleController');
Route::resource('puntos','PuntoController');
Route::get('cargarequipo/{id}','JugadorController@mostrarjugadores');
Route::get('Vcapitan/{id}','JugadorController@capitan');
Route::get('eli/{id}', 'JugadorController@Eliminar')->name('Eliminar');
Route::get('FEncuentro/{idL}/{idV}', 'EncuentroController@FinalizarEncuentro');
Route::get('golesG','GoleController@guardarGoles')->name('golesG');
Route::get('eliminarE/{id}','EncuentroController@EliminarEncuentro');
Route::get('modalEncuentro/{id}','EncuentroController@CargarDatosModal');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    //Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
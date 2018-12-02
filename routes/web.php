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
  //  return view('welcome');
    return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas para avatar
Route::resource('avatar', 'Avatar\AvatarController');
//rutas para avatar


//perfil y edicion de perfil
Route::resource('Perfil', 'user\perfilController');
route::post('/updatePerfil/{id}','user\perfilController@update')->name('updatePerfil');
//perfil y edicion de perfil

//rutas para dias libre
Route::resource('dayOFF', 'Dias\DiasAsuetoController');
route::post('/updateDay/{id}','Dias\DiasAsuetoController@update')->name('updateDay');
route::post('/destroyDays/{id}','Dias\DiasAsuetoController@destroy')->name('destroyDays');
//rutas para dias libre


Route::resource('Tareas', 'tarea\TareaController');
Route::get('listarUsers', 'tarea\TareaController@list_users')->name('listarUsers');

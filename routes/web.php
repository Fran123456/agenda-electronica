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

//tareas
Route::resource('Tareas', 'tarea\TareaController');
Route::get('listarUsers', 'tarea\TareaController@list_users')->name('listarUsers');
Route::get('cambiar-estado-finalizado/{id}', 'tarea\TareaController@cambio_estado_finalizado')->name('cambiar-estado-finalizado');
Route::get('cambiar-estado-proceso/{id}', 'tarea\TareaController@cambio_estado_proceso')->name('cambiar-estado-proceso');
Route::get('cambiar-estado-inicio/{id}', 'tarea\TareaController@cambio_estado_inicio')->name('cambiar-estado-inicio');

Route::get('Mis-tareas', 'tarea\TareaController@MyTask')->name('Mis-tareas');
Route::get('tareas-no-finalizadas', 'tarea\TareaController@tareas_No_finalizada')->name('tareas-no-finalizadas');


//administracion de tareas
Route::get('Tareas-sin-iniciar', 'tarea\TareaController@MyTask_incio')->name('Tareas-sin-iniciar');
//tareas

//rutas para administracion de notificaciones
Route::resource('Notificaciones', 'Notificaciones\NotyController');
Route::get('nueva-notificacion/{id}', 'Notificaciones\NotyController@leer_notificacion')->name('nueva-notificacion');
Route::get('notificaciones-enviadas', 'Notificaciones\NotyController@send_noty')->name('notificaciones-enviadas');



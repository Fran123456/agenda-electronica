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
    return redirect('installation');
});


//__instalacion
Route::get('installation', 'install_Controller@__instalacion1')->name('installation');
Route::get('listo', 'install_Controller@listo')->name('listo');
//__instalacion


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas para avatar
Route::resource('avatar', 'Avatar\AvatarController');
//rutas para avatar


//perfil y edicion de perfil
Route::resource('Perfil', 'user\perfilController');
route::post('/updatePerfil/{id}','user\perfilController@update')->name('updatePerfil');
route::get('actualizar-perfil/{id}' ,'user\perfilController@edit_All')->name('actualizar-perfil');
route::post('/update_all/{id}','user\perfilController@update_all')->name('update_all');
route::get('actualizar-password/{id}' ,'user\perfilController@edit_password')->name('actualizar-password');
route::post('updatePassword/{id}' ,'user\perfilController@update_password')->name('updatePassword');
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
Route::get('tareas-sin-iniciar', 'tarea\TareaController@tareas_sin_iniciar')->name('tareas-sin-iniciar');
Route::get('tareas-en-proceso', 'tarea\TareaController@tareas_proceso')->name('tareas-en-proceso');
Route::get('tareas-finalizadas', 'tarea\TareaController@tareas_fin')->name('tareas-finalizadas');

Route::get('reprogramar-tarea/{id}', 'tarea\TareaController@reprogramar_task')->name('reprogramar-tarea');
Route::post('programarTask/{id}', 'tarea\TareaController@update')->name('programarTask');

//administracion de tareas
Route::get('Tareas-sin-iniciar', 'tarea\TareaController@MyTask_incio')->name('Tareas-sin-iniciar');
//tareas

//rutas para administracion de notificaciones
Route::resource('Notificaciones', 'Notificaciones\NotyController');
Route::get('nueva-notificacion/{id}', 'Notificaciones\NotyController@leer_notificacion')->name('nueva-notificacion');
Route::get('notificaciones-enviadas', 'Notificaciones\NotyController@send_noty')->name('notificaciones-enviadas');
Route::get('delete-noti/{id}', 'Notificaciones\NotyController@destroy_me')->name('delete-noti');
Route::get('delete-noti-send/{id}', 'Notificaciones\NotyController@destroy_send')->name('delete-noti-send');
Route::get('notificaciones-sistema', 'Notificaciones\NotyController@notificaciones_sistema')->name('notificaciones-sistema');



//PUSH
Route::get('push', 'Notificaciones\NotyController@notificationPUSH')->name('push');

//MAIL
Route::get('mail/send', 'Email\EmailController@send');

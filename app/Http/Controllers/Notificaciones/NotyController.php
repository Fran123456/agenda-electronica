<?php

namespace App\Http\Controllers\Notificaciones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notificacion;
use App\Notificacion_Usuario;
use App\User;
use App\Tarea;
use Illuminate\Support\Facades\DB;


class NotyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noty = Notificacion_Usuario::orderBy('created_at','desc')->where('user_id' , Auth::user()->id)->get();


        $notyAll = array();
        foreach ($noty as $key => $value) {
         $notyAll[$key] = Notificacion::where('codigo_noty' , $value->notificacion_id)->first();
        }

        return view('MyNotificaciones.NotificacionIndex', compact('noty', 'notyAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //metodos creados aparte de los generales
    public function leer_notificacion($id){
       $notificacion = Notificacion::where('codigo_noty' , $id)->first();
       $creador = User::where('id' , $notificacion->creador)->first();
       $tarea = Tarea::where('codigo_tarea', $notificacion->tarea_id)->first();
       $colaboradores = Notificacion_Usuario::where('notificacion_id', $id)->get();
 

       $perfiles = array();
       foreach ($colaboradores as $key => $value) {
         $perfiles[$key] = User::where('id', $value->user_id)->first();
       }

      //actualizacion de notificaciones.
      DB::table('notificacion_user')->where('notificacion_id', $id)->where('user_id', Auth::user()->id)->update(['estado' => "LEIDA"]);

       return view('Notificaciones.NotificacionCreate', compact('notificacion', 'creador', 'tarea', 'perfiles'));
    }
}

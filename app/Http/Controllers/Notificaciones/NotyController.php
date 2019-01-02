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
use App\Tarea_Usuario;
use Illuminate\Support\Facades\Route;


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
        return view('MyNotificaciones.NotificacionCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  //CREACION DE NOTIFICACION //
        $codigoNoti = $this->code('Noty');
        $Notificacion = Notificacion::create([
          'codigo_noty' => $codigoNoti,
          'titulo'=>$request['titulo'],
          'cuerpo'=>$request['mensaje'],
          'creador'=>Auth::user()->id,
          'tipo_noti' => 'propia'
      ]);
      //CREACION DE NOTIFICACION//

    //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
     $users = $request->users;
     for ($i=0; $i <count($users) ; $i++) {
          $notyUsuarios =  Notificacion_Usuario::create([
           'notificacion_id' => $codigoNoti,
           'user_id' => $users[$i],
           'estado' => 'SIN LEER'
          ]);
     }

      return redirect()->route('Notificaciones.index')->with('agregado' , 'Elemento agregado correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noti = Notificacion::where('id', $id)->first();

        $notixuser = Notificacion_Usuario::where('notificacion_id', $noti->codigo_noty)->get();

        $perfiles = array();
        foreach ($notixuser as $key => $value) {
          $perfiles[$key] = User::where('id', $value->user_id)->first();
        }

        return view('MyNotificaciones.Show', compact('noti', 'perfiles'));
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
     
    }

    public function destroy_me($id){
       DB::table('notificacion_user')->where('notificacion_id', $id)->where('user_id', Auth::user()->id)->delete();
       return back()->with('eliminado','Eliminado con exito');
    }

    public function destroy_send($id){
        DB::table('notificacion')->where('codigo_noty', $id)->delete();
       return back()->with('eliminado','Eliminado con exito');
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


    public function send_noty(){

        $misNotis = Notificacion::where('creador', Auth::user()->id)->get();
       /* $noty = Notificacion_Usuario::orderBy('created_at','desc')->where('user_id' , Auth::user()->id)->get();
        $notyAll = array();
        foreach ($noty as $key => $value) {
         $notyAll[$key] = Notificacion::where('codigo_noty' , $value->notificacion_id)->first();
        }
*/
        return view('MyNotificaciones.SendIndex', compact('misNotis'));
    }


    public function code($prefijo) {
    $uno = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
    $dos = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
    $tres = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
    $number = rand(1000000, 9999999). "-" . rand(1000, 9999);
    $number2 = rand(99999,10000);
    $variable = $prefijo . "-". $uno . "-" . $number . "-". $dos . "-". $number2. "-". $tres;
    return $variable;
   }




   public  function notificationPUSH() {
       $user_id = Auth::user()->id;
        $noty = DB::table('notificacion_user')->orderBy('id','desc')->where('user_id', $user_id)->where('estado', 'SIN LEER')->get();
        $html ="";
      if(count($noty) > 0){
         foreach ($noty as $key => $value) {
         $informacion[$key] =  DB::table('notificacion')->where('codigo_noty', $value->notificacion_id)->first();
        // $informacion['user'][$key] = DB::table('users')->where('id', $informacion[$key]->creador)->first();


       $informacion[$key] = DB::table('notificacion')
            ->join('users', 'users.id', '=', 'notificacion.creador')
            ->select('notificacion.*', 'users.name', 'users.avatar_img')
            ->where('codigo_noty', $value->notificacion_id)
            ->first();

       }
    }else{
     $informacion = array();
    }
       echo json_encode($informacion);

    
      // return Response::json($informacion);
    }

}

<?php

namespace App\Http\Controllers\tarea;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notificacion_Usuario;
use App\Notificacion;
use App\Tarea_Usuario;
use App\User;
use App\Tarea;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class TareaController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::all();
        $titulo = "Gestión de tareas";
        return view('Tarea.TareaIndex' , compact('tareas', 'titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tarea.TareaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //CREACION DE TAREA//
     $codigoTarea = $this->code('Tarea');
      $Tarea = Tarea::create([
          'codigo_tarea' => $codigoTarea,
          'Titulo'=>$request['titulo'],
          'Cuerpo'=>$request['descripcion'],
          'estado'=>$request['estado'],
          'fecha_finalizacion'=>$request['fecha'],
          'creador' => Auth::user()->id,
      ]);
      //CREACION DE TAREA//

    //CREACION DE TAREAS POR USUARIO//
     $users = $request->users;
     for ($i=0; $i <count($users) ; $i++) {
          $tareasUsuario = Tarea_Usuario::create([
           'tarea_id' => $codigoTarea,
           'user_id' => $users[$i]
          ]);
     }
     //CREACION DE TAREAS POR USUARIO//

     //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA
     $codigoNoty = $this->code('Noty');
     $tituloGenerico = strtoupper(Auth::user()->name) . " TE ASIGNO UNA NUEVA TAREA";
     $noty = Notificacion::create([
         'codigo_noty' => $codigoNoty,
         'titulo' => $tituloGenerico,
         'cuerpo' => $request['mensaje'],
         'creador' => Auth::user()->id,
         'tarea_id' => $codigoTarea,
         'tipo_noti' => 'tarea'
       ]);
     //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA

     //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
     for ($i=0; $i <count($users) ; $i++) {
          $notyUsuarios =  Notificacion_Usuario::create([
           'notificacion_id' => $codigoNoty,
           'user_id' => $users[$i],
           'estado' => 'SIN LEER'
          ]);
     }
     //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
      return redirect()->route('Tareas.index')->with('agregado', "Elemento agregado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::where('codigo_tarea', $id)->first();
        $colaboradores = Tarea_Usuario::where('tarea_id', $id)->get();
 
       $perfiles = array();
       foreach ($colaboradores as $key => $value) {
         $perfiles[$key] = User::where('id', $value->user_id)->first();
       }

       $jefe = User::where('id', $tarea->creador)->first();

       return view('Tarea.TareaShow', compact('tarea', 'perfiles', 'jefe'));
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


  //METODOS PROPIOS
  public function list_users(){
    $users = User::all();
    echo json_encode($users);
  }

  public function MyTask(){
      $titulo ="Gestión de mis tareas asignadas";
        $tareasxuser = Tarea_Usuario::where('user_id', Auth::user()->id)->get();
        
        $tareas = array();
        foreach ($tareasxuser as $key => $value) {
          $tareas[$key] = Tarea::where('codigo_tarea', $value->tarea_id)->first();
        }
        
        return view('Tarea.TareaIndex' , compact('tareas', 'titulo'));
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

   public function cambio_estado_finalizado($id){
      DB::table('tareas')->where('codigo_tarea', $id)->update(['estado' => "Finalizado"]);

     //generamos mensaje
      $mensaje = Auth::user()->name . " ha cambiado el estado de la tarea ha FINALIZADO.";
      $titulo = "CAMBIO DE ESTADO EN TAREA";
      $this->SendNotificacionAll($id, $mensaje, $titulo);

     return back()->with('editado', "Elemento agregado correctamente");
      
   }

   public function cambio_estado_proceso($id){
      DB::table('tareas')->where('codigo_tarea', $id)->update(['estado' => "Proceso"]);


      //generamos mensaje
      $mensaje = Auth::user()->name . " ha cambiado el estado de la tarea ha EN PROCESO.";
      $titulo = "CAMBIO DE ESTADO EN TAREA";
      $this->SendNotificacionAll($id, $mensaje, $titulo);

       return back()->with('editado', "Elemento agregado correctamente");
   }

   public function cambio_estado_inicio($id){
      DB::table('tareas')->where('codigo_tarea', $id)->update(['estado' => "Inicio"]);

      //generamos mensaje
      $mensaje = Auth::user()->name . " ha cambiado el estado de la tarea ha INICIO.";
      $titulo = "CAMBIO DE ESTADO EN TAREA";
      $this->SendNotificacionAll($id, $mensaje, $titulo);
      return back()->with('editado', "Elemento agregado correctamente");
   }

   

   //genera notificacion al cambiar de estado
   public function SendNotificacionAll($id_tarea, $mensaje = null, $titulo = null){
      $tarea = Tarea::where('codigo_tarea', $id_tarea)->first();

      //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA
        $codigoNoty = $this->code('Noty');
        $tituloGenerico = $titulo;
        $noty = Notificacion::create([
         'codigo_noty' => $codigoNoty,
         'titulo' => $tituloGenerico,
         'cuerpo' => $mensaje,
         'creador' => Auth::user()->id,
         'tarea_id' => $tarea->codigo_tarea,
         'tipo_noti' => 'cambio
         '
       ]);
     //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA


     $users = Tarea_Usuario::where('tarea_id', $tarea->codigo_tarea)->get();
    //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA


     foreach ($users as $key => $value) {
      if(Auth::user()->id != $value->user_id){
         $notyUsuarios =  Notificacion_Usuario::create([
             'notificacion_id' => $codigoNoty,
             'user_id' => $value->user_id,
             'estado' => 'SIN LEER'
            ]);
        }
      }
   //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA

   }

   //ESTA FUNCION VA SERVIR PARA CAMBIAR AL ESTADO NO TERNINADO 
   //LO HARA COMPRANDO LAS FECHAS
    



}

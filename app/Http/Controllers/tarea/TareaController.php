<?php

namespace App\Http\Controllers\tarea;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notificacion_Usuario;
use App\Notificacion;
use App\Tarea_Usuario;
use App\User;
use App\Tarea;
use App\DiasAsueto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

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
        $tareas = Tarea::where('grupo' , Auth::user()->grupo)->paginate(8);
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


    $soldado = 0; //determina si el siguiente dia no es asueto
    $fecha_final = null;
    $fecha = $request['fecha'];
    //echo date("Y-m-d",strtotime($fecha."+ 1 days"));
    $asuetos = DiasAsueto::where('fecha', $fecha)->get();

    if(count($asuetos) == 0){
      $soldado = 1;
    }else{
      $soldado = 0;
    }

    while($soldado == 0){
       $fecha =  date("Y-m-d",strtotime($fecha."+ 1 days"));
       $asuetos = DiasAsueto::where('fecha', $fecha)->get();
          if(count($asuetos) == 0){
            $soldado = 1;
          }else{
            $soldado = 0;
          }
    }

    //echo date("d-m-Y",strtotime($fecha."+ 1 days"));
    //echo date("d-m-Y", strtotime("+1 day"));



      //CREACION DE TAREA//
     $codigoTarea = $this->code('Tarea');
      $Tarea = Tarea::create([
          'codigo_tarea' => $codigoTarea,
          'Titulo'=>$request['titulo'],
          'Cuerpo'=>$request['descripcion'],
          'estado'=>$request['estado'],
          'fecha_finalizacion'=>$fecha,
          'creador' => Auth::user()->id,
          'grupo' => Auth::user()->grupo,
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
          if($users[$i] != Auth::user()->id){
             $notyUsuarios =  Notificacion_Usuario::create([
             'notificacion_id' => $codigoNoty,
             'user_id' => $users[$i],
             'estado' => 'SIN LEER'
            ]);

            $to = User::where('id', $users[$i])->first();


        //   $this->mail_newTask($to->email, $tituloGenerico , $request['mensaje'], 'support@yetitask.djfrankremixer.com'  ,'yeti.png',  Auth::user()->name, Auth::user()->email, ' Soporte YETI-TASK', $to->name);
       }

     }

     //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
      return redirect()->route('Tareas.index')->with('agregado', "Elemento agregado correctamente");
    }


   public function mail_newTask($to, $titulo, $data, $fromEmail,  $path, $TaskSenderName, $TaskSenderEmail, $senderName, $receiverName){
        $objDemo = new \stdClass();
        $objDemo->titulo = $titulo;
        $objDemo->data = $data;
        $objDemo->fromEmail = $fromEmail;
        $objDemo->path  = $path;

        $objDemo->TaskSenderName = $TaskSenderName;
        $objDemo->TaskSenderEmail = $TaskSenderEmail;

        $objDemo->sender = $senderName;
        $objDemo->receiver = $receiverName;
        Mail::to($to)->send(new Email($objDemo));
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
      $tarea = Tarea::where('codigo_tarea', $id)->first();
      $usersA = Tarea_Usuario::where('tarea_id', $id)->get()->toArray();
      $users = User::where('rol', '!=' , 'soporte')->where('grupo' , Auth::user()->grupo)->get();

     return view('Tarea.TareaEditx', compact('tarea', 'usersA', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //actualiza pero dirigido a modificar la fecha y los usuarios de la tarea
    {

      DB::table('tareas_usuarios')->where('tarea_id', $id)->delete();


      $soldado = 0; //determina si el siguiente dia no es asueto
      $fecha =$request->fecha;
      $asuetos = DiasAsueto::where('fecha', $fecha)->get();

      if(count($asuetos) == 0){
        $soldado = 1;
      }else{
        $soldado = 0;
      }

      while($soldado == 0){
         $fecha =  date("Y-m-d",strtotime($fecha."+ 1 days"));
         $asuetos = DiasAsueto::where('fecha', $fecha)->get();
            if(count($asuetos) == 0){
              $soldado = 1;
            }else{
              $soldado = 0;
            }
      }

            DB::table('tareas')
            ->where('codigo_tarea', $id)
            ->update(
              [
                'Titulo' => $request->titulo ,
                'Cuerpo' => $request->descripcion,
                'estado' => $request->estado,
                'fecha_finalizacion' => $fecha,
              ]);




     //CREACION DE TAREAS POR USUARIO//
     $users = $request->users;
     for ($i=0; $i <count($users) ; $i++) {
          $tareasUsuario = Tarea_Usuario::create([
           'tarea_id' => $id,
           'user_id' => $users[$i]
          ]);
     }

     //CREACION DE TAREAS POR USUARIO//

     //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA
     $codigoNoty = $this->code('Noty');
     $tituloGenerico = strtoupper(Auth::user()->name) . " HA MODIFICADO LA TAREA";
       $noty = Notificacion::create([
         'codigo_noty' => $codigoNoty,
         'titulo' => $tituloGenerico,
         'cuerpo' => $request['mensaje'],
         'creador' => Auth::user()->id,
         'tarea_id' => $id,
         'tipo_noti' => 'tarea'
       ]);
     //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA

     //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
     for ($i=0; $i <count($users) ; $i++) {
          if($users[$i] != Auth::user()->id){
             $notyUsuarios =  Notificacion_Usuario::create([
             'notificacion_id' => $codigoNoty,
             'user_id' => $users[$i],
             'estado' => 'SIN LEER'
            ]);

            $to = User::where('id', $users[$i])->first();

        //   $this->mail_newTask($to->email, $tituloGenerico , $request['mensaje'], 'support@yetitask.djfrankremixer.com'  ,'yeti.png',  Auth::user()->name, Auth::user()->email, ' Soporte YETI-TASK', $to->name);
       }
    }

    return redirect()->route('Tareas.index')->with('editado', "Tarea editada correctamente");
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tareas')->where('codigo_tarea', $id)->delete();
        return back()->with('eliminado', "Tarea eliminada correctamente");
    }



  //METODOS PROPIOS
  public function list_users(){
    $users = User::where('id' ,'!=' ,1)->Where('grupo' , Auth::user()->grupo)->get();
    echo json_encode($users);
  }

  public function reprogramar_task($id){

     $tarea = Tarea::where('codigo_tarea', $id)->first();
     $usersA = Tarea_Usuario::where('tarea_id', $id)->get()->toArray();
     $users = User::where('rol', '!=' , 'soporte')->get();

    return view('Tarea.TareaReprogramar', compact('tarea', 'usersA', 'users'));
  }

  public function MyTask(){ //mis tareas muestra las tareas asignadas al usuario que se ha logeado
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


   public function tareas_No_finalizada(){





        $tareas = Tarea::where('estado','No terminada')->where('grupo' , Auth::user()->grupo)->get();
        $titulo = "Tareas no finalizadas";
        return view('Tarea.TareaNoFinIndex' , compact('tareas', 'titulo'));
   }


   public function tareas_sin_iniciar(){
        $tareas = Tarea::where('estado','Inicio')->where('grupo' , Auth::user()->grupo)->get();
        $titulo = "Tareas sin iniciar";
        return view('Tarea.TareaInicioIndex' , compact('tareas', 'titulo'));
   }

     public function tareas_proceso(){
        $tareas = Tarea::where('estado','Proceso')->where('grupo' , Auth::user()->grupo)->get();
        $titulo = "Tareas en proceso";
        return view('Tarea.TareaProcesoIndex' , compact('tareas', 'titulo'));
   }

    public function tareas_fin(){
        $tareas = Tarea::where('estado','Finalizado')->where('grupo' , Auth::user()->grupo)->get();
        $titulo = "Tareas finalizadas";
        return view('Tarea.TareaFinIndex' , compact('tareas', 'titulo'));
   }





}

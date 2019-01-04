<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notificacion_Usuario;
use App\Notificacion;
use App\Tarea_Usuario;
use App\User;
use App\Tarea;
use Illuminate\Support\Facades\Route;
class Noty {

    public function __construct()
    {
      $this->middleware('auth');


    }
    /**
     * @param int $user_id User-id
     *
     * @return string
     */
    public static function notification($user_id) {
        $noty = DB::table('notificacion_user')->where('user_id', $user_id)->where('estado', 'SIN LEER')->get();
        $html ="";
    if(count($noty) > 0){
         foreach ($noty as $key => $value) {
         $informacion = DB::table('notificacion')->where('codigo_noty', $value->notificacion_id)->first();
         $html = $html.'<li class="divider"></li>'.
         '<li>'.
             '<a href="'. route('nueva-notificacion',$value->notificacion_id) .'">'.
                 '<div>'.
                     '<i class="fa fa-comment-o" aria-hidden="true"></i> ' . $informacion->titulo .
                     '<span class="pull-right text-muted small">'. substr($informacion->created_at, 0, 10) .' a las: '. substr($informacion->created_at, 10, 15) .'</span><br>'.
                 '</div>'.
             '</a>'.
         '</li><br><li class="divider"></li>';
       }
    }else{
    $html ="NO HAY NOTIFICACIONES";
    }
       
       return $html;
    }



    





    public static function n_noty($user_id){
         $noty = DB::table('notificacion_user')->where('user_id', $user_id)->where('estado', 'SIN LEER')->get();
         $noty = count($noty);
         return $noty;
    }


    //ESTA FUNCION VA SERVIR PARA CAMBIAR AL ESTADO NO TERNINADO 
   //LO HARA COMPRANDO LAS FECHAS
    public static function __off(){
       $hoy = getdate();
       $year = $hoy['year'];
       $mouth = $hoy['mon'];
       $day = $hoy['mday'];
       $actual = $year . '-' . $mouth . '-' . $day; //fecha actual de hoy

      $tareas= Tarea::where('fecha_finalizacion','<',$actual)
       ->where('estado' ,'!=', 'Finalizado')
       ->Where('estado' ,'!=', 'No terminada')
       ->get();//tareas que ya finalizaron pero no estan terminadasfinalizaron pero no estan terminadas

       foreach ($tareas as $key => $value) {
           Noty::cambio_estado_NoTerminada($value->codigo_tarea); 
           Noty::Send_Noty_Admin($value->codigo_tarea, $value->creador);
       }

       
    }


   public static function cambio_estado_NoTerminada($id){
      DB::table('tareas')->where('codigo_tarea', $id)->update(['estado' => "No terminada"]);

      //generamos mensaje
      $mensaje = "LA TAREA NO HA PODIDO SER FINALIZADA, SE LES NOTIFICARA CUANDO SEA NUEVAMENTE PROGRAMADA A LOS USUARIOS QUE SE LES ASIGNE. <br><br> Feliz Día.";
      $titulo = "LA TAREA NO HA SIDO FINALIZADA";
      Noty::SendNotificacionAll($id, $mensaje, $titulo);
   }


     //genera notificacion al cambiar de estado
   public static function SendNotificacionAll($id_tarea, $mensaje = null, $titulo = null){
      $tarea = Tarea::where('codigo_tarea', $id_tarea)->first();

      //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA
        $codigoNoty = Noty::code('Noty');
        $tituloGenerico = $titulo;
        $noty = Notificacion::create([
         'codigo_noty' => $codigoNoty,
         'titulo' => $tituloGenerico,
         'cuerpo' => $mensaje,
         'creador' =>  1,
         'tarea_id' => $tarea->codigo_tarea,
         'tipo_noti' => 'generada-users'
       ]);
     //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA


     $users = Tarea_Usuario::where('tarea_id', $tarea->codigo_tarea)->get();
    //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
     foreach ($users as $key => $value) {
        
         $notyUsuarios =  Notificacion_Usuario::create([
             'notificacion_id' => $codigoNoty,
             'user_id' => $value->user_id,
             'estado' => 'SIN LEER'
            ]);
        
      }
   //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA

      

   }

   public static function Send_Noty_Admin($id_tarea , $id){
        $codigoNoty = Noty::code('Noty');
        $tituloGenerico = "LA TAREA NO SE FINALIZO, PUEDE REPROGRAMARLA.";
        $mensaje = "La tarea no ha podido ser finalizada en la fecha estipulada, de ser necesario puede volver a reprogramar la tarea con los mismos colaboradores o diferentes. <br><br> Feliz día.";
        $noty = Notificacion::create([
         'codigo_noty' => $codigoNoty,
         'titulo' => $tituloGenerico,
         'cuerpo' => $mensaje,
         'creador' =>  1,
         'tarea_id' => $id_tarea,
         'tipo_noti' => 'generada'
       ]);

        $notyUsuarios =  Notificacion_Usuario::create([
             'notificacion_id' => $codigoNoty,
             'user_id' => $id,
             'estado' => 'SIN LEER'
            ]);
   }


     public static function code($prefijo) {
        $uno = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        $dos = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
        $tres = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
        $number = rand(1000000, 9999999). "-" . rand(1000, 9999);
        $number2 = rand(99999,10000);
        $variable = $prefijo . "-". $uno . "-" . $number . "-". $dos . "-". $number2. "-". $tres;
        return $variable;
       }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notificacion_Usuario;
use App\Notificacion;
use App\Tarea_Usuario;
use App\User;
use App\Tarea;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $actividadesHoyA = array();
         $integrantesA = array();
         $usersA = array();
        if(Auth::user()->rol =="super"){
           $actividadesHoyA = $this->__today();
                foreach ($actividadesHoyA as $key => $value) {
                 $integrantesA = Tarea_Usuario::where('tarea_id', $value->codigo_tarea)->get();

                 foreach ($integrantesA as $key2 => $value2) {
                    $usersA[$key][$key2] = User::where('id' , $value2->user_id)->first();
                 }
                }
        }
       
  
        $actividadesHoy = $this->__todayForUser();
        foreach ($actividadesHoy as $key => $value) {
         $integrantes = Tarea_Usuario::where('tarea_id', $value->codigo_tarea)->get();

         foreach ($integrantes as $key2 => $value2) {
            $users[$key][$key2] = User::where('id' , $value2->user_id)->first();
         }
        }
       return view('home', compact('actividadesHoy','users','actividadesHoyA','usersA'));
    }


    public function __today(){
       $actual = $this->__ActualDate();
       $tareas= Tarea::where('fecha_finalizacion',$actual)
       ->get();//tareas que ya finalizaron pero no estan terminadas
      return $tareas;
    }

    public function __todayForUser(){
        $userActivo = Auth::user()->id;
        $tareasUsuarioA = Tarea_Usuario::where('user_id', $userActivo)->get();
        $idTareas = array();
        foreach ($tareasUsuarioA as $key => $value) {
            $idTareas[$key] = $value->tarea_id;
        }

        $tareasActuales = array();
        for ($i=0; $i <count($idTareas) ; $i++) { 
            $tareasActuales[$i] = Tarea::where('codigo_tarea', $idTareas[$i])->first();
        }

      return $tareasActuales;
    }

    public function __ActualDate(){
       $hoy = getdate();
       $year = $hoy['year'];
       $mouth = $hoy['mon'];
       $day = $hoy['mday'];
       $actual = $year . '-' . $mouth . '-' . $day; //fecha actual de hoy
       return $actual;
    }
}

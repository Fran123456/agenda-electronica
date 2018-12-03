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
        return view('Tarea.TareaIndex' , compact('tareas'));
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
         'tarea_id' => $codigoTarea
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


  //METODOS PROPIOS
  public function list_users(){
    $users = User::all();
    echo json_encode($users);
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

}

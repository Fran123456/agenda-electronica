<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Avatar;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notificacion_Usuario;
use App\Notificacion;
use App\Tarea_Usuario;
use App\Tarea;
use Illuminate\Support\Facades\DB;

class perfilController extends Controller
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
        //
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
       $allTask = count(Tarea_Usuario::where('user_id', $id)->get());
       $Task = Tarea_Usuario::where('user_id', $id)->get();

      $fin = 0;
      $proceso = 0;
       foreach ($Task as $key => $value) {
           $aux = Tarea::where('codigo_tarea', $value->tarea_id)->first();
            if($aux->estado = "Finalizado"){
               $fin++;
            }

            if($aux->estado = "Proceso"){
               $proceso++;
            }

       }

        return view('users.All', compact('allTask', 'fin', 'proceso', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfil = User::find($id);
        $urls = Avatar::all();
        //$urls = array('perfil/plume.png','perfil/pvz2.png','perfil/pyrojump.png','perfil/quadropus.png','perfil/scribblenauts.png','perfil/seesmic.png','perfil/sonic.png');

        return view('users.verPerfil', compact('perfil','urls'));
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

        $perfil = User::find($id);
        $perfil->fill($request->all())->save();
      /*$perfil->name = $request->get('name');
        $perfil->email = $request->get('email');
        $perfil->img = $request->get('img');*/

      return redirect()->route('Perfil.edit', $id)->with('agregado', 'Perfil editado correctamente');

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
}

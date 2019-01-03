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
use App\DiasAsueto;
use Illuminate\Support\Facades\DB;
use Hash;

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
        $users = User::all();
        return view('users.UserIndex', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avatars = Avatar::all();
        return view('users.UserCreate', compact('avatars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       User::create([
          'name' => $request->name,
          'email' => $request->correo,
          'avatar_img' => 'https://i.ibb.co/P5p1trd/contacts2.png',
          'rol' => $request->rolxx,
          'password' => Hash::make($request->pass)
       ]);

     return redirect()->route('Perfil.index')->with('agregado', "Usuario registrado correctamente");
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

       $dias = DiasAsueto::paginate(10);
       $userschidos = User::paginate(10);

       $miProfile = User::find($id);
        return view('users.All', compact('allTask', 'fin', 'proceso', 'id','dias', 'userschidos', 'miProfile'));
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
        return view('users.verPerfil', compact('perfil','urls'));
    }

    public function edit_All($id){
        
        $perfil = User::find($id);
        $urls = Avatar::all();
        $op = array('super', 'common-user');
        return view('users.editUser', compact('perfil','urls', 'op'));
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



    public function update_all(Request $request, $id)
    {

        $perfil = User::find($id);
        $perfil->fill($request->all())->save();
      return redirect()->route('Perfil.index', $id)->with('agregado', 'Perfil editado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('eliminado','Eliminado con exito');

    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      if($data['soldado'] == 'si'){
        DB::table('grupo')->insert(
        ['codigo' => $data['grupo']]);
      }


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar_img' => 'https://i.ibb.co/P5p1trd/contacts2.png',
            'rol' => $data['rol'],
            'grupo' => $data['grupo'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function code_validate_form(){
      return view('auth.code');
    }

    public function validar_code(Request $data){
      $code = DB::table('grupo')->where('codigo' , $data->codigo)->get();

      if(count($code)> 0){
        return redirect()->route('Registro', $data->codigo);
      }else{
        return redirect()->route('bienvenido-grupo')->with('error', "Error, el codigo ingresado no es valido");
      }
    }

    public function registro_form($id){

      try{
        if($id == null){
          return redirect()->route('bienvenido-grupo');
        }else{
          return view('auth.register_user', compact('id'));
        }
      }catch(Exception $e){
        return redirect()->route('bienvenido-grupo');
      }
    }


    public function registro_form_grupo(){
      $codigo = $this->code();
      return view('auth.register', compact('codigo'));
    }


    public function code() {

      $uno = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
      $number = rand(100, 999);
      $dos = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 4);
      $variable = $uno . $number . $dos;
      return $variable;
     }


}

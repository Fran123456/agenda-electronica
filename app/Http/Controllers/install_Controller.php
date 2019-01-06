<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class install_Controller extends Controller
{
  //funcion de instalacion del software
      public function __instalacion1(){
      $info =  DB::table('instalacion')->where('id', 1)->first();

        if($info->instalacion =="no"){
        return view('ins.ins');
      }elseif($info->instalacion =="si"){
         return redirect('login');

       }
      }

    public function listo(){
      DB::table('instalacion')->where('id',  1)->update(['instalacion' => 'si']);
      return redirect('login');
    }
}

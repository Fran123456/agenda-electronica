<?php
//app/Helpers/Envato/User.php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class Noty {
    /**
     * @param int $user_id User-id
     *
     * @return string
     */
    public static function notification($user_id) {
        $noty = DB::table('notificacion_user')->where('user_id', $user_id)->where('estado', 'SIN LEER')->get();
        $html ="";
       foreach ($noty as $key => $value) {
         $informacion = DB::table('notificacion')->where('codigo_noty', $value->notificacion_id)->first();
         $html = $html.'<li class="divider"></li>'.
         '<li>'.
             '<a href="profile.html">'.
                 '<div>'.
                     '<i class="fa fa-comment-o" aria-hidden="true"></i> ' . $informacion->titulo .
                     '<span class="pull-right text-muted small">'. substr($informacion->created_at, 0, 10) .' a las: '. substr($informacion->created_at, 10, 15) .'</span><br>'.
                 '</div>'.
             '</a>'.
         '</li><li class="divider"></li>';
       }
       return $html;
    }

    public static function n_noty($user_id){
         $noty = DB::table('notificacion_user')->where('user_id', $user_id)->where('estado', 'SIN LEER')->get();
         $noty = count($noty);
         return $noty;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion_Usuario extends Model
{
  protected $table = 'notificacion_user';
  protected $fillable = [
      'id','notificacion_id' ,'user_id','estado'
  ];
}

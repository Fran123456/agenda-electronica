<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
  protected $table = 'notificacion';
  protected $fillable = [
      'id','titulo' ,'cuerpo','creador','tarea_id'
  ];
}

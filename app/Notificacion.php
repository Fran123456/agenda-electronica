<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
  protected $table = 'notificacion';
  protected $fillable = [
      'id','codigo_noty','titulo' ,'cuerpo','creador','tarea_id'
  ];
}

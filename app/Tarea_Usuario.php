<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea_Usuario extends Model
{
  protected $table = 'tareas_usuario';
  protected $fillable = [
      'id','tarea_id' ,'user_id'
  ];
}

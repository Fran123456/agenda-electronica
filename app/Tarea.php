<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
  protected $table = 'tareas';
  protected $fillable = [
      'id','Titulo' ,'Cuerpo','estado','fecha_finalizacion','creador'
  ];
}

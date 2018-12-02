<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
  protected $table = 'tareas';
  protected $fillable = [
      'id','codigo_tarea','Titulo' ,'Cuerpo','estado','fecha_finalizacion','creador'
  ];
}

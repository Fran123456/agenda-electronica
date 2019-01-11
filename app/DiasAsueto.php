<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiasAsueto extends Model
{
    protected $table = 'diasasueto';
    protected $fillable = [
        'id','fecha' ,'descripcion', 'grupo'];
}

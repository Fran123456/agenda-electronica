<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
	protected $table = 'avatar';
    protected $fillable = [
        'id','nombre' ,'url'
    ];
}

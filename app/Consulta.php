<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    //
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

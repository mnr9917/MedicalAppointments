<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'pacientes';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

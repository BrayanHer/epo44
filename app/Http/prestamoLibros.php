<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prestamoLibros extends Model
{
    use SoftDeletes;
    
    protected $table = 'prestamoLibros';
    protected $primaryKey ='IdPrestamo';
    protected $fillable=['IdPrestamo','IdMatricula','IdLibro','FechaPrestamo','FechaEntrega'];

    protected $data = ['delete_at'];
}

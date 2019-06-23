<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
 //tabla personalizada
 protected $table = 'paquete';

 protected $fillable = ['nombre',
                         'duracion',
                         'costo',
                         'descuento',
                         'estado',
                         'cedula_identidad',
                         'email'];    
                         
                         
 //relaciones

 public function persona()
    {
        return $this->hasOne('App\Phone');
    }
}

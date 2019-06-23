<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //tabla personalizada
    protected $table = 'persona';

    protected $fillable = ['nombre_un',
                            'nombre_dos',
                            'apellido_un',
                            'apellido_dos',
                            'estado',
                            'cedula_identidad',
                            'email'];
                            
                            
    /*     The attributes excluded from the model's JSON form.
     
    protected $hidden = [
        'password',
     ];  */
    
    
}

// AQUI LAS RELACIONES asociadas con la persona

//EJMPLO
/*
Funcion uno a uno 

 public function phone()
    {
        return $this->hasOne('App\Phone');  //direccionamos hasta el 
    }


*/
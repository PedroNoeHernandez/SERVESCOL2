<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
 
 
 
    // Query Scope

    public function scopeNombres($quiery,$nombre){
        if($nombre){
            return $quiery->where('Nombres','LIKE',"$nombre%");
        }   
    }
    public function scopeApellido_paterno($quiery,$Apellido_paterno){
        if($Apellido_paterno){
            return $quiery->where('Apellido_Paterno','LIKE',"$Apellido_paterno%");
        }   
    }
    public function scopeApellido_Materno($quiery,$Apellido_Materno){
        if($Apellido_Materno){
            return $quiery->where('Apellido_Materno','LIKE',"$Apellido_Materno%");
        }   
    }
    public function scopeemail($quiery,$email){
        if($email){
            return $quiery->where('email','LIKE',"%$email%");
        }
    }
    
}

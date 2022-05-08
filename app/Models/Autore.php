<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    use HasFactory;

    protected $fillable =[
       'nombre','apellidos', 'nacionalidad', 'sexo', 'edad'
    ];

    public function libro(){

       return $this->hasMany('App\Models\Libro');
    }
}

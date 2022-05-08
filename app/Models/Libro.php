<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public function alquileres(){
        return $this->hasMany('App/Models/Alquilere');
    }

    public function autore(){
        return $this->belongsTo('App/Models/Autore');
    }
}

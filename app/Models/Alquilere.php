<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquilere extends Model
{
    use HasFactory;

    protected $fillable =[
       'codLibro','codUsuario', 'fechaPrestamo', 'fechaDevolución'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function libro(){
        return $this->belongsTo('App\Models\Libro');
    }
}

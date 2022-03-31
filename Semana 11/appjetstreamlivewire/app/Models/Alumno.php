<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    //permite cargas masivas de datos
    //con generadores
    protected $fillable = [
        'name', 
        'age'
    ];  

}

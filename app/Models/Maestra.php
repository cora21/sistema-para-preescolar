<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maestra extends Model
{
    use HasFactory;

    protected $table = 'maestras';

    protected $fillable = [
        'nombre', 
        'apellido', 
        'cedula', 
        'salon', 
        'comentarios'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incri extends Model
{
    use HasFactory;

    protected $table = 'incri';

    protected $fillable = [
        'nom_ape',
        'sexo',
        'fechanaci',
        'condiciones',
        'comentario',
        'nom_ape_ma',
        'correoma',
        'cedulama',
        'telefo1ma',
        'telefo2ma',
        'legalesma',
        'comentarioma',
        'nom_ape_pa',
        'correopa',
        'cedulapa',
        'telefo1pa',
        'telefo2pa',
        'legalespa',
        'comentariopa',
        'nom_ape_auto',
        'cedu',
        'comentarioauto',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRegistro extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_registro',
        'unidad_educativa',
        'carrera_interes',
        'correo_electronico',
        'celular',
        'direccion',
        'solicitudes_becas_estado'
    ];
}

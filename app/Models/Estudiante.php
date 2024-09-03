<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'email',
        'telefono',
        'fecha_nacimiento',
    ];

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }
}

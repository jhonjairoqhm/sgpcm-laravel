<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    // Atributos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido',
        'especialidad',
        'horarios',
        'telefono',
        'email',
    ];

    // Relación con el modelo Cita
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}

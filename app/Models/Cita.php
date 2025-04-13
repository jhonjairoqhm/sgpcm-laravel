<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    // Especifica los atributos que son asignables masivamente
    protected $fillable = [
        'paciente_id',
        'medico_id',
        'fecha',
    ];

    // Relación con el modelo Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    // Relación con el modelo Medico
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
}

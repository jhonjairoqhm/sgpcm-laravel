<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    // Especifica los atributos que son asignables masivamente
    protected $fillable = [
        'nombre',
        'especialidad',
    ];

    // Relación con el modelo Cita
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}

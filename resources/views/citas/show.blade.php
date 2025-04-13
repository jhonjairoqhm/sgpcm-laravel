@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle de la Cita</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Paciente</h5>
            <p class="card-text">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>

            <h5 class="card-title">Médico</h5>
            <p class="card-text">{{ $cita->medico->nombre }} ({{ $cita->medico->especialidad }})</p>

            <h5 class="card-title">Fecha</h5>
            <p class="card-text">{{ $cita->fecha_cita }}</p>

            <h5 class="card-title">Hora</h5>
            <p class="card-text">{{ $cita->hora_cita }}</p>

            <h5 class="card-title">Motivo</h5>
            <p class="card-text">{{ $cita->motivo_consulta }}</p>
        </div>
    </div>

    <a href="{{ route('citas.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection

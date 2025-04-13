@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Cita</h1>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="paciente_id" class="form-label">Paciente</label>
            <select name="paciente_id" id="paciente_id" class="form-control" required>
                <option value="">Seleccione un paciente</option>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nombre }} {{ $paciente->apellido }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="medico_id" class="form-label">Médico</label>
            <select name="medico_id" id="medico_id" class="form-control" required>
                <option value="">Seleccione un médico</option>
                @foreach($medicos as $medico)
                    <option value="{{ $medico->id }}">{{ $medico->nombre }} ({{ $medico->especialidad }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_cita" class="form-label">Fecha</label>
            <input type="date" name="fecha_cita" id="fecha_cita" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="hora_cita" class="form-label">Hora</label>
            <input type="time" name="hora_cita" id="hora_cita" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="motivo_consulta" class="form-label">Motivo</label>
            <input type="text" name="motivo_consulta" id="motivo_consulta" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Cita</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

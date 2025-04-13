@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cita</h1>

    <form action="{{ route('citas.update', $cita->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="paciente_id" class="form-label">Paciente</label>
            <select name="paciente_id" id="paciente_id" class="form-control" required>
                @foreach($pacientes as $paciente)
                    <option value="{{ $paciente->id }}" {{ $cita->paciente_id == $paciente->id ? 'selected' : '' }}>
                        {{ $paciente->nombre }} {{ $paciente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="medico_id" class="form-label">Médico</label>
            <select name="medico_id" id="medico_id" class="form-control" required>
                @foreach($medicos as $medico)
                    <option value="{{ $medico->id }}" {{ $cita->medico_id == $medico->id ? 'selected' : '' }}>
                        {{ $medico->nombre }} ({{ $medico->especialidad }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_cita" class="form-label">Fecha</label>
            <input type="date" name="fecha_cita" id="fecha_cita" class="form-control" value="{{ $cita->fecha_cita }}" required>
        </div>

        <div class="mb-3">
            <label for="hora_cita" class="form-label">Hora</label>
            <input type="time" name="hora_cita" id="hora_cita" class="form-control" value="{{ $cita->hora_cita }}" required>
        </div>

        <div class="mb-3">
            <label for="motivo_consulta" class="form-label">Motivo</label>
            <input type="text" name="motivo_consulta" id="motivo_consulta" class="form-control" value="{{ $cita->motivo_consulta }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

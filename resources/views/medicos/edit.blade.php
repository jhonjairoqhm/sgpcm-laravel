@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Médico</h1>
        <form action="{{ route('medicos.update', $medico) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" value="{{ $medico->nombre }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad:</label>
                <input type="text" name="especialidad" value="{{ $medico->especialidad }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

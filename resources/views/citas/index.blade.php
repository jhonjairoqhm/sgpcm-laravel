@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Citas</h1>
    <a href="{{ route('citas.create') }}" class="btn btn-primary mb-3">Crear Nueva Cita</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Motivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
                <tr>
                    <td>{{ $cita->id }}</td>
                    <td>{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</td>
                    <td>{{ $cita->medico->nombre }} {{ $cita->medico->apellido }}</td>
                    <td>{{ $cita->fecha_cita }}</td>
                    <td>{{ $cita->hora_cita }}</td>
                    <td>{{ $cita->motivo_consulta }}</td>
                    <td>
                        <a href="{{ route('citas.edit', $cita) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('citas.destroy', $cita) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta cita?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

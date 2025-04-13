@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Médicos</h1>
        <a href="{{ route('medicos.create') }}" class="btn btn-primary mb-3">Crear Médico</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicos as $medico)
                    <tr>
                        <td>{{ $medico->id }}</td>
                        <td>{{ $medico->nombre }}</td>
                        <td>{{ $medico->especialidad }}</td>
                        <td>
                            <a href="{{ route('medicos.show', $medico) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('medicos.edit', $medico) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('medicos.destroy', $medico) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

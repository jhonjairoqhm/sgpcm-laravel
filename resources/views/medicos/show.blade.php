@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Médico</h1>

        <p><strong>Nombre:</strong> {{ $medico->nombre }}</p>
        <p><strong>Especialidad:</strong> {{ $medico->especialidad }}</p>

        <a href="{{ route('medicos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection

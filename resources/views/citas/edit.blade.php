<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">

                    <!-- Mostrar errores de validación -->
                    @if ($errors->any())
                        <div class="mb-4 text-red-600">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('citas.update', $cita) }}">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 gap-6">
                            <div class="flex flex-col">
                                <label for="paciente_id" class="text-gray-700 dark:text-gray-300">Paciente</label>
                                <select name="paciente_id" id="paciente_id" class="mt-1 p-2 border rounded-md" required>
                                    @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}" {{ $cita->paciente_id == $paciente->id ? 'selected' : '' }}>
                                            {{ $paciente->nombre }} {{ $paciente->apellido }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="medico_id" class="text-gray-700 dark:text-gray-300">Médico</label>
                                <select name="medico_id" id="medico_id" class="mt-1 p-2 border rounded-md" required>
                                    @foreach($medicos as $medico)
                                        <option value="{{ $medico->id }}" {{ $cita->medico_id == $medico->id ? 'selected' : '' }}>
                                            {{ $medico->nombre }} ({{ $medico->especialidad }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="fecha_cita" class="text-gray-700 dark:text-gray-300">Fecha</label>
                                <input type="date" name="fecha_cita" id="fecha_cita" value="{{ old('fecha_cita', $cita->fecha_cita) }}" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="hora_cita" class="text-gray-700 dark:text-gray-300">Hora</label>
                                <input type="time" name="hora_cita" id="hora_cita" value="{{ old('hora_cita', $cita->hora_cita) }}" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="motivo_consulta" class="text-gray-700 dark:text-gray-300">Motivo</label>
                                <input type="text" name="motivo_consulta" id="motivo_consulta" value="{{ old('motivo_consulta', $cita->motivo_consulta) }}" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <!-- Campo de Observaciones -->
                            <div class="flex flex-col">
                                <label for="observaciones" class="text-gray-700 dark:text-gray-300">Observaciones</label>
                                <textarea name="observaciones" id="observaciones" rows="4" class="mt-1 p-2 border rounded-md">{{ old('observaciones', $cita->observaciones) }}</textarea>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Actualizar Cita
                            </button>
                            <a href="{{ route('citas.index') }}" class="ml-2 px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

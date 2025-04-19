<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Nueva Cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100">

                    {{-- Mostrar errores --}}
                    @if ($errors->any())
                        <div class="mb-4 text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('citas.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Select paciente --}}
                            <div class="flex flex-col">
                                <label for="paciente_id" class="mb-1">Paciente</label>
                                <select name="paciente_id" id="paciente_id" class="p-2 border rounded-md text-black" required>
                                    <option value="">Seleccione un paciente</option>
                                    @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}" {{ old('paciente_id') == $paciente->id ? 'selected' : '' }}>
                                            {{ $paciente->nombre }} {{ $paciente->apellido }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Select médico --}}
                            <div class="flex flex-col">
                                <label for="medico_id" class="mb-1">Médico</label>
                                <select name="medico_id" id="medico_id" class="p-2 border rounded-md text-black" required>
                                    <option value="">Seleccione un médico</option>
                                    @foreach($medicos as $medico)
                                        <option value="{{ $medico->id }}" {{ old('medico_id') == $medico->id ? 'selected' : '' }}>
                                            {{ $medico->nombre }} ({{ $medico->especialidad }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Fecha de cita --}}
                            <div class="flex flex-col">
                                <label for="fecha_cita" class="mb-1">Fecha</label>
                                <input type="date" name="fecha_cita" id="fecha_cita" class="p-2 border rounded-md text-black" value="{{ old('fecha_cita') }}" required>
                            </div>

                            {{-- Hora de cita --}}
                            <div class="flex flex-col">
                                <label for="hora_cita" class="mb-1">Hora</label>
                                <input type="time" name="hora_cita" id="hora_cita" class="p-2 border rounded-md text-black" value="{{ old('hora_cita') }}" required>
                            </div>

                            {{-- Motivo --}}
                            <div class="flex flex-col md:col-span-2">
                                <label for="motivo_consulta" class="mb-1">Motivo de la Consulta</label>
                                <input type="text" name="motivo_consulta" id="motivo_consulta" class="p-2 border rounded-md text-black" value="{{ old('motivo_consulta') }}" required>
                            </div>

                            {{-- Observaciones --}}
                            <div class="flex flex-col md:col-span-2">
                                <label for="observaciones" class="mb-1">Observaciones</label>
                                <textarea name="observaciones" id="observaciones" rows="4" class="p-2 border rounded-md text-black">{{ old('observaciones') }}</textarea>
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                                Guardar Cita
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

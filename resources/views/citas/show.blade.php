<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle de la Cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex flex-col">
                            <label for="paciente" class="text-gray-700 dark:text-gray-300">{{ __('Paciente') }}</label>
                            <p>{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="medico" class="text-gray-700 dark:text-gray-300">{{ __('Médico') }}</label>
                            <p>{{ $cita->medico->nombre }} ({{ $cita->medico->especialidad }})</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="fecha_cita" class="text-gray-700 dark:text-gray-300">{{ __('Fecha de la Cita') }}</label>
                            <p>{{ $cita->fecha_cita }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="hora_cita" class="text-gray-700 dark:text-gray-300">{{ __('Hora de la Cita') }}</label>
                            <p>{{ $cita->hora_cita }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="motivo_consulta" class="text-gray-700 dark:text-gray-300">{{ __('Motivo de la Consulta') }}</label>
                            <p>{{ $cita->motivo_consulta }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="observaciones" class="text-gray-700 dark:text-gray-300">{{ __('Observaciones') }}</label>
                            <p>{{ $cita->observaciones }}</p>
                        </div>
                    </div>

                    
                    <a href="{{ route('citas.index') }}" class="mt-6 inline-block bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition-colors duration-300">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

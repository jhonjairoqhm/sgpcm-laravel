<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalles del Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="flex flex-col">
                            <label for="nombre" class="text-gray-700 dark:text-gray-300">{{ __('Nombre') }}</label>
                            <p>{{ $paciente->nombre }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="apellido" class="text-gray-700 dark:text-gray-300">{{ __('Apellido') }}</label>
                            <p>{{ $paciente->apellido }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="fecha_nacimiento" class="text-gray-700 dark:text-gray-300">{{ __('Fecha de Nacimiento') }}</label>
                            <p>{{ $paciente->fecha_nacimiento }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="genero" class="text-gray-700 dark:text-gray-300">{{ __('Género') }}</label>
                            <p>{{ $paciente->genero }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="direccion" class="text-gray-700 dark:text-gray-300">{{ __('Dirección') }}</label>
                            <p>{{ $paciente->direccion }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="telefono" class="text-gray-700 dark:text-gray-300">{{ __('Teléfono') }}</label>
                            <p>{{ $paciente->telefono }}</p>
                        </div>

                        <div class="flex flex-col">
                            <label for="email" class="text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
                            <p>{{ $paciente->email }}</p>
                        </div>
                    </div>

                    <!-- Botón para volver -->
                    <div class="mt-6">
                        <a href="{{ route('pacientes.index') }}" class="inline-block px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition duration-200">
                            {{ __('Volver a la lista de pacientes') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

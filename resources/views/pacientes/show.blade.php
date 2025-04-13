<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalle del Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <strong>Nombre:</strong>
                        <p>{{ $paciente->nombre }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Edad:</strong>
                        <p>{{ $paciente->edad }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Dirección:</strong>
                        <p>{{ $paciente->direccion }}</p>
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('pacientes.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                            Volver
                        </a>
                        <a href="{{ route('pacientes.edit', $paciente->id) }}" class="ml-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

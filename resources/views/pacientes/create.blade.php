<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <form method="POST" action="{{ route('pacientes.store') }}">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <div class="flex flex-col">
                                <label for="nombre" class="text-gray-700 dark:text-gray-300">{{ __('Nombre') }}</label>
                                <input type="text" name="nombre" id="nombre" class="mt-1 p-2 border border-gray-300 dark:border-gray-600 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="apellido" class="text-gray-700 dark:text-gray-300">{{ __('Apellido') }}</label>
                                <input type="text" name="apellido" id="apellido" class="mt-1 p-2 border border-gray-300 dark:border-gray-600 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="fecha_nacimiento" class="text-gray-700 dark:text-gray-300">{{ __('Fecha de Nacimiento') }}</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="mt-1 p-2 border border-gray-300 dark:border-gray-600 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="genero" class="text-gray-700 dark:text-gray-300">{{ __('Género') }}</label>
                                <select name="genero" id="genero" class="mt-1 p-2 border border-gray-300 dark:border-gray-600 rounded-md" required>
                                    <option value="masculino">{{ __('Masculino') }}</option>
                                    <option value="femenino">{{ __('Femenino') }}</option>
                                    <option value="otro">{{ __('Otro') }}</option>
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="direccion" class="text-gray-700 dark:text-gray-300">{{ __('Dirección') }}</label>
                                <input type="text" name="direccion" id="direccion" class="mt-1 p-2 border border-gray-300 dark:border-gray-600 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="telefono" class="text-gray-700 dark:text-gray-300">{{ __('Teléfono') }}</label>
                                <input type="text" name="telefono" id="telefono" class="mt-1 p-2 border border-gray-300 dark:border-gray-600 rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="email" class="text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" class="mt-1 p-2 border border-gray-300 dark:border-gray-600 rounded-md" required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                {{ __('Guardar Paciente') }}
                            </button>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registrar Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('pacientes.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                            <input type="text" name="nombre" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-900 dark:text-white" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Edad</label>
                            <input type="number" name="edad" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-900 dark:text-white" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Dirección</label>
                            <input type="text" name="direccion" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-900 dark:text-white" required>
                        </div>

                        <div class="flex justify-end">
                            <a href="{{ route('pacientes.index') }}" class="mr-4 text-sm text-gray-600 dark:text-gray-300 hover:underline">Cancelar</a>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

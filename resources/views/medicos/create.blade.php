<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Médico') }}
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

                    <form method="POST" action="{{ route('medicos.store') }}">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <div class="flex flex-col">
                                <label for="nombre" class="text-gray-700 dark:text-gray-300">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="apellido" class="text-gray-700 dark:text-gray-300">Apellido</label>
                                <input type="text" name="apellido" id="apellido" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="especialidad" class="text-gray-700 dark:text-gray-300">Especialidad</label>
                                <input type="text" name="especialidad" id="especialidad" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="horarios" class="text-gray-700 dark:text-gray-300">Horarios</label>
                                <input type="text" name="horarios" id="horarios" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="telefono" class="text-gray-700 dark:text-gray-300">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="mt-1 p-2 border rounded-md" required>
                            </div>

                            <div class="flex flex-col">
                                <label for="email" class="text-gray-700 dark:text-gray-300">Email</label>
                                <input type="email" name="email" id="email" class="mt-1 p-2 border rounded-md" required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                                Guardar Médico
                            </button>
                            <a href="{{ route('medicos.index') }}" class="ml-2 px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

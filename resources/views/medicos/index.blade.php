<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Médicos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('medicos.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                            Crear Médico
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Nombre</th>
                                    <th class="px-4 py-2 text-left">Apellido</th>
                                    <th class="px-4 py-2 text-left">Especialidad</th>
                                    <th class="px-4 py-2 text-left">Horarios</th>
                                    <th class="px-4 py-2 text-left">Teléfono</th>
                                    <th class="px-4 py-2 text-left">Email</th>
                                    <th class="px-4 py-2 text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($medicos as $medico)
                                    <tr class="border-t border-gray-200 dark:border-gray-700">
                                        <td class="px-4 py-2">{{ $medico->nombre }}</td>
                                        <td class="px-4 py-2">{{ $medico->apellido }}</td>
                                        <td class="px-4 py-2">{{ $medico->especialidad }}</td>
                                        <td class="px-4 py-2">{{ $medico->horarios }}</td>
                                        <td class="px-4 py-2">{{ $medico->telefono }}</td>
                                        <td class="px-4 py-2">{{ $medico->email }}</td>
                                        <td class="px-4 py-2 text-center">
                                            <a href="{{ route('medicos.show', $medico->id) }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                                                Ver
                                            </a>
                                            <a href="{{ route('medicos.edit', $medico->id) }}" class="ml-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                                                Editar
                                            </a>
                                            <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between mb-4">
                        <h3 class="text-lg font-bold">Pacientes registrados</h3>
                        <a href="{{ route('pacientes.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                            + Nuevo Paciente
                        </a>
                    </div>

                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Edad</th>
                                <th class="px-4 py-2">Dirección</th>
                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes as $paciente)
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td class="px-4 py-2">{{ $paciente->id }}</td>
                                    <td class="px-4 py-2">{{ $paciente->nombre }}</td>
                                    <td class="px-4 py-2">{{ $paciente->edad }}</td>
                                    <td class="px-4 py-2">{{ $paciente->direccion }}</td>
                                    <td class="px-4 py-2 space-x-2">
                                        <a href="{{ route('pacientes.edit', $paciente) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                        <form action="{{ route('pacientes.destroy', $paciente) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('¿Estás seguro?')" class="text-red-600 hover:text-red-800">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($pacientes->isEmpty())
                                <tr>
                                    <td colspan="5" class="px-4 py-4 text-center text-gray-500 dark:text-gray-400">
                                        No hay pacientes registrados.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <!-- Paginación -->
                    <div class="mt-4">
                        {{ $pacientes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

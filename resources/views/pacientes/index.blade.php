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
                    <div class="flex justify-between items-center mb-4">
                        <a href="{{ route('pacientes.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                            Crear Paciente
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Nombre</th>
                                    <th class="px-4 py-2 text-left">Apellido</th>
                                    <th class="px-4 py-2 text-left">Género</th>
                                    <th class="px-4 py-2 text-left">Teléfono</th>
                                    <th class="px-4 py-2 text-left">Email</th>
                                    <th class="px-4 py-2 text-left">Edad</th>
                                    <th class="px-4 py-2 text-left">Dirección</th>
                                    <th class="px-4 py-2 text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pacientes as $paciente)
                                    <tr class="border-t border-gray-200 dark:border-gray-700">
                                        <td class="px-4 py-2">{{ $paciente->nombre }}</td>
                                        <td class="px-4 py-2">{{ $paciente->apellido }}</td>
                                        <td class="px-4 py-2">{{ $paciente->genero }}</td>
                                        <td class="px-4 py-2">{{ $paciente->telefono }}</td>
                                        <td class="px-4 py-2">{{ $paciente->email }}</td>
                                        <td class="px-4 py-2">{{ $paciente->edad }}</td>
                                        <td class="px-4 py-2">{{ $paciente->direccion }}</td>
                                        <td class="px-4 py-2 text-center">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('pacientes.show', $paciente->id) }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">
                                                    Ver
                                                </a>
                                                <a href="{{ route('pacientes.edit', $paciente->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                                                    Editar
                                                </a>
                                                <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </div>
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

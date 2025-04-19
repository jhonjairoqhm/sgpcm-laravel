<x-layout>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <h1 class="text-2xl font-semibold text-white mb-6">Lista de Citas</h1>

        <div class="bg-gray-900 shadow-md rounded-lg p-6">
            <a href="{{ route('citas.create') }}" 
               class="mb-4 inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
                Crear Cita
            </a>

            <table class="min-w-full table-auto text-white">
                <thead>
                    <tr class="bg-gray-800 text-sm uppercase text-gray-400">
                        <th class="px-4 py-2">Paciente</th>
                        <th class="px-4 py-2">Médico</th>
                        <th class="px-4 py-2">Fecha</th>
                        <th class="px-4 py-2">Hora</th>
                        <th class="px-4 py-2">Motivo</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citas as $cita)
                        <tr class="border-t border-gray-700">
                            <td class="px-4 py-2">{{ $cita->paciente->nombre }}</td>
                            <td class="px-4 py-2">{{ $cita->medico->nombre }}</td>
                            <td class="px-4 py-2">{{ $cita->fecha_cita }}</td>
                            <td class="px-4 py-2">{{ $cita->hora_cita }}</td>
                            <td class="px-4 py-2">{{ $cita->motivo_consulta }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('citas.show', $cita) }}" 
                                   class="bg-green-600 hover:bg-green-700 text-white py-1 px-3 rounded text-sm">
                                    Ver
                                </a>
                                <a href="{{ route('citas.edit', $cita) }}" 
                                   class="bg-blue-600 hover:bg-blue-700 text-white py-1 px-3 rounded text-sm">
                                    Editar
                                </a>
                                <form action="{{ route('citas.destroy', $cita) }}" method="POST" class="inline-block"
                                      onsubmit="return confirm('¿Estás seguro de eliminar esta cita?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded text-sm">
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
</x-layout>

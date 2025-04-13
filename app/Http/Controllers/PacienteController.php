<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    // Muestra todos los pacientes
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    // Muestra el formulario para crear un nuevo paciente
    public function create()
    {
        return view('pacientes.create');
    }

    // Guarda un nuevo paciente en la base de datos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        Paciente::create($validated);

        return redirect()->route('pacientes.index')->with('success', 'Paciente creado exitosamente');
    }

    // Muestra los detalles de un paciente
    public function show(Paciente $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    // Muestra el formulario para editar un paciente
    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    // Actualiza los datos de un paciente
    public function update(Request $request, Paciente $paciente)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'required|string',
            'direccion' => 'required|string',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        $paciente->update($validated);

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado exitosamente');
    }

    // Elimina un paciente
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado exitosamente');
    }
}

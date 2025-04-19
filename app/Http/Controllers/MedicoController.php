<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    // Muestra todos los médicos
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    // Muestra el formulario para crear un nuevo médico
    public function create()
    {
        return view('medicos.create');
    }

    // Guarda un nuevo médico en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'especialidad' => 'required',
            'horarios' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:medicos,email',
        ]);

        Medico::create($request->all());
        return redirect()->route('medicos.index')->with('success', 'Médico creado con éxito.');
    }

    // Muestra el formulario para editar un médico
    public function edit(Medico $medico)
    {
        return view('medicos.edit', compact('medico'));
    }

    // Actualiza la información de un médico en la base de datos
    public function update(Request $request, Medico $medico)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'especialidad' => 'required',
            'horarios' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:medicos,email,' . $medico->id,
        ]);

        $medico->update($request->all());
        return redirect()->route('medicos.index')->with('success', 'Médico actualizado correctamente.');
    }

    // Elimina un médico de la base de datos
    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect()->route('medicos.index')->with('success', 'Médico eliminado.');
    }

    // Muestra los detalles de un médico específico
    public function show(Medico $medico)
    {
        return view('medicos.show', compact('medico'));
    }
}

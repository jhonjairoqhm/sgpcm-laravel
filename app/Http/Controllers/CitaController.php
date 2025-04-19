<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Paciente;
use App\Models\Medico;

class CitaController extends Controller
{
    // Mostrar todas las citas
    public function index()
    {
        $citas = Cita::with(['paciente', 'medico'])->get();
        return view('citas.index', compact('citas'));
    }

    // Mostrar el formulario para crear una nueva cita
    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('citas.create', compact('pacientes', 'medicos'));
    }

    // Almacenar una nueva cita
    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
            'motivo_consulta' => 'required|string',
            'observaciones' => 'nullable|string',
        ]);

        // Crear la cita con los datos del formulario
        Cita::create($request->all());

        // Redirigir a la lista de citas con un mensaje de éxito
        return redirect()->route('citas.index')->with('success', 'Cita creada con éxito.');
    }

    // Mostrar los detalles de una cita
    public function show(Cita $cita)
    {
        return view('citas.show', compact('cita'));
    }

    // Mostrar el formulario para editar una cita existente
    public function edit(Cita $cita)
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('citas.edit', compact('cita', 'pacientes', 'medicos'));
    }

    // Actualizar una cita existente
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
            'motivo_consulta' => 'required|string',
            'observaciones' => 'nullable|string',
        ]);

        // Actualizar la cita
        $cita->update($request->all());

        // Redirigir a la lista de citas con un mensaje de éxito
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
    }

    // Eliminar una cita
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada.');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Paciente;
use App\Models\Medico;

class CitaController extends Controller
{

    public function index()
    {
        $citas = Cita::with(['paciente', 'medico'])->get();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('citas.create', compact('pacientes', 'medicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
            'motivo_consulta' => 'required|string',
        ]);

        Cita::create($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita creada con éxito.');
    }

    public function edit(Cita $cita)
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('citas.edit', compact('cita', 'pacientes', 'medicos'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'fecha_cita' => 'required|date',
            'hora_cita' => 'required',
            'motivo_consulta' => 'required|string',
        ]);

        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada.');
    }
}

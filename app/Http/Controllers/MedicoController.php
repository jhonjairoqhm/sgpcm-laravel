<?php

namespace App\Http\Controllers;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{

    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

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

    public function edit(Medico $medico)
    {
        return view('medicos.edit', compact('medico'));
    }

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

    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect()->route('medicos.index')->with('success', 'Médico eliminado.');
    }
}

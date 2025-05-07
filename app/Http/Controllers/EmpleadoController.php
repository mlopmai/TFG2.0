<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Oficina $oficina)
    {
        $empleados = $oficina->empleados;
        return view('empleados.index', compact('empleados', 'oficina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        

        $request->validate(rules: [
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'rol' => 'required',
            'fecha_nacimiento' => 'required|date',
            'dni' => 'required|unique:empleados,dni|regex:/^[0-9]{8}[A-Za-z]$/',
            'email' => 'required|email',
            'oficina_id' => 'required|exists:oficinas,id',
        
        ]);
        
        Empleado::create($request->all());

        return redirect()->route('oficinas.index')->with('success', 'Empleado creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $oficinaId,  string $empleadoId)
    {
        $oficina = Oficina::findOrFail($oficinaId);
        $empleado = Empleado::findOrFail($empleadoId);
        return view('empleados.show', data: compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $oficinaId,  string $empleadoId)
    {     
        $oficina = Oficina::findOrFail($oficinaId);
        $empleado = Empleado::findOrFail($empleadoId);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $oficinaId,  string $empleadoId)
    {
        $oficina = Oficina::findOrFail($oficinaId);
        $empleado = Empleado::findOrFail($empleadoId);
        $request->validate(rules: [
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'rol' => 'required',
            'fecha_nacimiento' => 'required|date',
            'dni' => 'required|regex:/^[0-9]{8}[A-Za-z]$/',
            'email' => 'required|email',
            'oficina_id' => 'required|exists:oficinas,id',
        
        ]);

        $empleado->update($request->all());

        return redirect()->route('oficinas.index')->with('success', 'Oficina editada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

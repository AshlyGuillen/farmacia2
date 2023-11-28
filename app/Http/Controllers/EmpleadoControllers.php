<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\CargoEmpleado;

class EmpleadoControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleado=Empleado::all();
        return view('empleado.index')->with('empleado',$empleado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $id=$id;
        
        return view('empleado.create')->with('cargo',$id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado=new Empleado();
        $empleado->nomempleado=$request->get('nombre');
        $empleado->telefono=$request->get('telefono');
        $empleado->idcargo=$request->get('cargo');
      
       
        $empleado->save();
        
        return view('empleado.index')->with('empleado',$empleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,string $idc)
    {
       
        $cargo=[$idc];
        $Editar=Empleado::find($id);
        return view('empleado.edit')->with('empleado',$Editar)->with('cargo',$cargo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar=Empleado::find($id);
        $empleado->nomempleado=$request->get('nombre');
        $empleado->telefono=$request->get('telefono');
        $empleado->idcargo=$request->get('cargo');
       

        $editar->save();
        return redirect('Empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=Empleado::find($id);
        $Eliminar->delete();

        return redirect('empleado');
    }
}

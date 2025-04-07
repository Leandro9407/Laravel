<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use SebastianBergmann\CodeCoverage\Driver\Selector;

;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return view("servicios.index", compact("servicios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("servicios.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50|unique:servicios,nombre',
        ], [
            'nombre.required' => 'El nombre del servicio es obligatorio',
            'nombre.unique' => 'Este nombre ya está en uso',
        ]);

        Servicio::create($request->all());
        return redirect()->route("servicios.index")->with("success","Servicio creado correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        $servicio->load('clientes');
        return view("servicios.show", compact("servicio"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        return view("servicios.edit", compact("servicio"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'nombre' => 'required|max:50|unique:servicios,nombre,' . $servicio->id,
        ],[
            'nombre.required' => 'El nombre del servicio es obligatorio',
            'nombre.unique' => 'Este nombre ya está en uso',
        ]);

        $servicio->update($request->all());
        return redirect()->route("servicios.index")->with("success","Servicio actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route("servicios.index")->with("danger","Servicio eliminado correctamente");
    }
}

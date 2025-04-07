<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalRequest;
use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personales = Personal::all(); /* ::all() trare todos los datos (metodo eloquent) */
        return view('index', compact('personales'));  /* compact() crea array asociativo o coleccion de datos y lo envia la variable a la vista, es decir al index*/

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');  /* return, retornar o direccionar a formulario */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalRequest $request) /* Request:solicitud $request:variable */
    {
        Personal::create($request->all());  /* create() para añadir o agregar datos nuevos, $request contiene los datos ::all() todos los datos */
        return redirect()->route('index')->with('success', 'Nuevos datos guardados'); /* redirect() para redireccionar ->route() a la ruta especifica*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        return view('show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        return view('edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalRequest $request, Personal $personal)
    {
        $personal->update($request->all());
        return redirect()->route('index')->with('success', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Personal $personal)
    {
        $personal->delete();
        return redirect()->route('index')->with('danger', 'Datos eliminados');
    }
}

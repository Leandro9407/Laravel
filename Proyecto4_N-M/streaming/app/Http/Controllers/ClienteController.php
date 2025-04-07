<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Servicio;
use GuzzleHttp\Client;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::with('servicios')->get();
        return view('clientes.index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicios = Servicio::all();
        return view('clientes.create', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|max:30',
            'apellido' => 'required|max:30',
            'telefono' => 'required|max:10',
            'correo' => 'required|max:50|unique:clientes,correo',
            'servicios.*' => 'exists:servicios,id'
        ], [
            'nombre.required'=> 'El nombre es obligatorio',
            'apellido.required'=> 'El apellido es obligatorio',
            'telefono.required'=> 'El telefono es obligatorio',
            'correo.required'=> 'El correo es obligatorio',
            'correo.unique'=> 'Este correo ya esta en uso',
        ]);

        $cliente = Cliente::create($request->all());
        $cliente->servicios()->attach($request->servicios);
        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        $cliente->load('servicios');
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $servicios = Servicio::all();
        return view('clientes.edit', compact('cliente','servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|max:30',
            'apellido' => 'required|max:30',
            'telefono' => 'required|max:10',
            'correo' => 'required|max:50|unique:clientes,correo,' . $cliente->id,
            'servicios.*' => 'exists:servicios,id'
        ], [
            'nombre.required'=> 'El nombre es obligatorio',
            'apellido.required'=> 'El apellido es obligatorio',
            'telefono.required'=> 'El telefono es obligatorio',
            'correo.required'=> 'El correo es obligatorio',
            'correo.unique'=> 'Este correo ya esta en uso',
        ]);

        $cliente->update($request->only(['nombre','apellido','telefono', 'correo']));
        $cliente->servicios()->sync($request->servicios ?? []);
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->servicios()->detach();
        $cliente->delete();
        return redirect()->route('clientes.index')->with('danger', 'Cliente eliminado correctamente');

    }
}

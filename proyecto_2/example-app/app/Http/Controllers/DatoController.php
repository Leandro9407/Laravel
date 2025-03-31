<?php

namespace App\Http\Controllers;

use Date;
use Illuminate\Http\Request;
use App\Models\Dato;
use App\Http\Requests\DatoRequest;
use function PHPUnit\Framework\returnArgument;

class DatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Dato::all();
        return view('index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DatoRequest $request)
    {
        Dato::create($request->all());
        return redirect()->route('index')->with('success', 'Datos guardados');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dato $dato)
    {
        return view('show', compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dato $dato)
    {
        return view('edit', compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DatoRequest $request, Dato $dato)
    {
        $dato->update($request->all());
        return redirect()->route('index')->with('success', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Dato $dato)
    {
        $dato->delete();
        return redirect()->route('index')->with('danger', 'Datos eliminados');
    }
}

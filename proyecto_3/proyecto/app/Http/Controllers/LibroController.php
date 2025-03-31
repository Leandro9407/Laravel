<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexLibro()
    {
        $libros = Libro::with('lector')->get();
        return view('indexLibro', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createLibro()
    {
        return view('createLibro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeLibro(Request $request)
    {
        Libro::create($request->all());
        return redirect()->route('indexLibro');
    }

    /**
     * Display the specified resource.
     */
    public function showLibro(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editLibro(Libro $libro)
    {
        return view('editLibro', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateLibro(Request $request, Libro $libro)
    {
        $libro -> update($request->all());
        return redirect()->route('indexLibro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyLibro(Libro $libro)
    {
        $libro -> delete();
        return redirect()->route('indexLibro');
    }
}

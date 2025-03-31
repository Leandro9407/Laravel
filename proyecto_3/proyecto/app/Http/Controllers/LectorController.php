<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lector;

class LectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexLector()
    {
        $lectores = Lector::with('libro')->get();
        return view('indexlector', compact('lectores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createLector()
    {
        return view('createLector');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeLector(Request $request)
    {
        Lector::create($request->all());
        return redirect()->route('indexLector');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lector $lector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editLector(Lector $lector)
    {
        return view('editLector', compact('lector'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateLector(Request $request, Lector $lector)
    {
        $lector -> update($request->all());
        return redirect()->route('indexLector');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyLector(Lector $lector)
    {
        $lector -> delete();
        return redirect()->route('indexLector');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{

    public function index() {
        $notes = Note::all();
        return view('index', compact('notes'));
    }

    /**
     * Display a listing of the resource.
     */
    public function create() {
        return view('note');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request)
    {
        Note::create($request->all());
        return redirect()->route('index')->with('success', 'Nota ingresada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('show', compact('note'));
    }

    public function edit(Note $note)
    {
        return view('edit', compact('note'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, Note $note)
    {
        $note->update($request->all());
        return redirect()->route('index')->with('success', 'Nota actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Note $note)
    {
        $note->delete();
        return redirect()->route('index')->with('danger', 'Nota eliminada');
    }
}

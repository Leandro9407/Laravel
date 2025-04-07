<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::with('estudiantes')->get();
        $estudiantes = Estudiante::with('profesor')->get();
        return view('index', compact('profesores', 'estudiantes'));
    }
}

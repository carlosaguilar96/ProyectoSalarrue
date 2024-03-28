<?php

namespace App\Http\Controllers;

class EstudianteController extends Controller
{
    public function crearEstudiante(){
        return view('estudiante.crear');
    }
}
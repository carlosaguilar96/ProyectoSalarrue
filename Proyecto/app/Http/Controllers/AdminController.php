<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function gestionUsuarios(){
        return view('admin.gestionUsuarios');
    }
}
<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function login(){
        return to_route('welcome');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalizadoController extends Controller
{
    public function index(){
        return view('deslogado.personalizado');
    }
}

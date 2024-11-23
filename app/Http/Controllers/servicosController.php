<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicosController extends Controller
{
    public function index(){
        return view('deslogado.servicos');
    }
}

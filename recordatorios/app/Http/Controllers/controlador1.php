<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador1 extends Controller
{
    //
    public function mostrarVista(){
        return view('recordatorios');
    }
}

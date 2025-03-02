<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        //Para mostrar texto
        /* return "Bienvenido a mi web"; */

        //Para mostrar vistas
        return view('index');
    }
}

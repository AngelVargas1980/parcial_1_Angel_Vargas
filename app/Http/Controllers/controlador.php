<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{

    public function funcFormulario()
    {
        return view('formulario');

    }

    public function funcUsuarios()
    {
        return view('usuarios');

    }

    public function funcLayout()
    {
        return view('layout');

    }

    public function funcHome()
    {
        return view('home');

    }

}

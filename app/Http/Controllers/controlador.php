<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{

    public function funcPag1()
    {
        return view('pag1');

    }

    public function funcPag2()
    {
        return view('pag2');

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

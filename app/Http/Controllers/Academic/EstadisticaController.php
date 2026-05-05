<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    public function index()
    {
        return view('academic.estadisticas.index');
    }

    public function admin()
    {
        return view('academic.estadisticas.admin');
    }
}

<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfiguracionAvanzadaController extends Controller
{
    public function index()
    {
        return view('academic.configuracion.index');
    }
}

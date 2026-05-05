<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    public function index()
    {
        return view('academic.examen.index');
    }

    public function simulacro()
    {
        return view('academic.examen.simulacro');
    }
}

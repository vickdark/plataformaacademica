<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    public function index()
    {
        return view('academic.preguntas.index');
    }

    public function create()
    {
        return view('academic.preguntas.create');
    }

    public function import()
    {
        return view('academic.preguntas.import');
    }
}

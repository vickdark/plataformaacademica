<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        return view('academic.biblioteca.index');
    }
}

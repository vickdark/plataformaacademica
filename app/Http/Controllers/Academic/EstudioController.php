<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudioController extends Controller
{
    public function index()
    {
        return view('academic.estudio.index');
    }

    public function pilar($id)
    {
        return view('academic.estudio.pilar', compact('id'));
    }
}

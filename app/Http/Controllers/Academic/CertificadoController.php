<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index()
    {
        return view('academic.certificados.index');
    }
}

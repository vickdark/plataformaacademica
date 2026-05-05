<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PilarController extends Controller
{
    public function index()
    {
        return view('academic.pilares.index');
    }

    public function create()
    {
        return view('academic.pilares.create');
    }

    public function topics($id)
    {
        return view('academic.pilares.topics', compact('id'));
    }
}

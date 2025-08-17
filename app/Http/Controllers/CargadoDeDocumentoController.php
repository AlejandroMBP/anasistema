<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargadoDeDocumentoController extends Controller
{
    public function index()
    {
        return view('cargarDocumentos.index');
    }
}

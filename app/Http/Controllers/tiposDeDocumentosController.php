<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tiposDeDocumentosController extends Controller
{
    public function index()
    {
        return view('tiposDocumentos.index');
    }
}

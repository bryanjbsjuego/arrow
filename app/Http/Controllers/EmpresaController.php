<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index() {
        return view('Empresa.index');
    }

    public function create(){
        return view ('Empresa.create');
    }
}

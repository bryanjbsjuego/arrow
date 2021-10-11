<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenatController extends Controller
{
    public function index(){
        return view('Empresa.index');
    }
}

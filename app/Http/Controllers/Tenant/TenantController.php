<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantController extends Controller
{
    public function index(){
        return view('tenant.listcompany');
    }
    public function create(){
        return view('tenant.createcompany');
    }

    public function edit(){
        return view('tenant.editcompany');
    }

    public function indexrol(){
        return view('tenant.listroles');
    }
    public function createrol(){
        return view('tenant.createrol');
    }

    public function editrol(){
        return view('tenant.editrol');
    }

    public function permirol(){
        return view('tenant.permissirol');
    }

    public function indexusers(){
        return view('tenant.listuseradmin');
    }
    public function createuser(){
        return view('tenant.createuseradmin');
    }
    public function edituser(){
        return view('tenant.edituseradmin');
    }


}

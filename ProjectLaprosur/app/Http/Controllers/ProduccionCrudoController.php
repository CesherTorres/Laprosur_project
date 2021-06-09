<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduccionCrudoController extends Controller
{
    public function index(){
        return view('produccionCrudos.index');
    }
}

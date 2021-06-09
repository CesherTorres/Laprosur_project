<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduccionCocidosController extends Controller
{
    public function index(){
        return view('produccionCocidos.index');
    }
}

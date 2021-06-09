<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ControlladrilloController extends Controller
{
    public function index(){
        $now = Carbon::now();
        return view('Controles.Controlindex', compact('now'));
    }
}

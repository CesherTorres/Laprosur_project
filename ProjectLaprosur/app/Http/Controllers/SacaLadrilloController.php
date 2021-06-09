<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class SacaLadrilloController extends Controller
{
    public function index(){
        $now = Carbon::now();
        return view('SacaLadrillos.Sacaindex', compact('now'));
    }
}

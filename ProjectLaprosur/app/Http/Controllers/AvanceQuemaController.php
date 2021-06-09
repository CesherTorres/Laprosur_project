<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AvanceQuemaController extends Controller
{
    public function index(){
        $now = Carbon::now();
        return view('AvanceQuema.Quemaindex', compact('now'));
    }
}

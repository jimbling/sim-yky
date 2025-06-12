<?php

namespace App\Http\Controllers;

use App\Models\Sim;

class SimController extends Controller
{
    public function index()
    {
        $sims = Sim::all();
        return view('landing-page', compact('sims'));
    }
}

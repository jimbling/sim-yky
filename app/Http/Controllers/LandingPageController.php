<?php

namespace App\Http\Controllers;

use App\Models\Sim;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Ambil semua data SIM dari database
        $sims = Sim::all();

        // Kirim data ke view
        return view('home', compact('sims'));
    }
}

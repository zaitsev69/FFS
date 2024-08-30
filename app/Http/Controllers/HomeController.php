<?php

namespace App\Http\Controllers;
use App\Models\Incident;
class HomeController extends Controller
{
    public function index()
    {
        $incidents = Incident::all(); 

        return view('home', compact('incidents'));
    }
}

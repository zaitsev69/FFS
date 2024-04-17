<?php

namespace App\Http\Controllers;

use App\Models\Incident;

class AdminController extends Controller
{
    public function dashboard()
    {
        $incidents = Incident::all();
        
        return view('admin.dashboard', ['incidents' => $incidents]);
    }
}


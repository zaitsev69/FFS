<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function store(Request $request)
    {
        $incident = Incident::create($request->all());

        return redirect()->back();
    }
}


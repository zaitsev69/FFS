<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date' => 'required|date',
            'lieu_dit' => 'required|string|max:255',
            'incident' => 'required|string'
        ]);
        $incident = Incident::create($validatedData);
        return redirect()->back()->with('status', 'Votre incident a été envoyé avec succès !');
    }
}


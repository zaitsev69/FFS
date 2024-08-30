<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index(Request $request)
{
    $incidents = Incident::when($request->input('search'), function ($query, $search) {
        $query->where('nom', 'like', "%$search%")
              ->orWhere('prenom', 'like', "%$search%")
              ->orWhere('lieu_dit', 'like', "%$search%")
              ->orWhere('incident', 'like', "%$search%");
    })->get();

    return $request->ajax() 
        ? response()->json($incidents) 
        : view('home', compact('incidents'));
}

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date' => 'required|date',
            'lieu_dit' => 'required|string|max:255',
            'incident' => 'required|string'
        ]);

        Incident::create($validatedData);
        return redirect()->back()->with('status', 'Votre incident a été envoyé avec succès !');
    }
}


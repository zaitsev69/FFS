<?php

namespace App\Http\Controllers;

use App\Models\Incident;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    $incidents = Incident::where('is_published', 1)->get();
    return view('home', ['incidents' => $incidents]);
    }


    public function dashboard()
    {
        $incidents = Incident::all();

        return view('dashboard', ['incidents' => $incidents]);
    }



    public function togglePublish($id)
    {
        $incident = Incident::find($id);
        $incident->is_published = !$incident->is_published;
        $incident->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $incident = Incident::find($id);
        $incident->nom = $request->input('nom');
        $incident->prenom = $request->input('prenom');
        $incident->date = $request->input('date');
        $incident->lieu_dit = $request->input('lieu_dit');
        $incident->incident = $request->input('incident');
        $incident->save();
        return redirect('admin/dashboard')->with('status', 'Incident mis à jour avec succès');
    }

    public function edit($id)
    {
        $incident = Incident::find($id);
        return view('admin.edit', ['incident' => $incident]);
    }

    public function destroy($id)
{
    $incident = Incident::find($id); 
    $incident->delete();  

    return redirect()->back()->with('success', 'Incident supprimé avec succès.');
}
}

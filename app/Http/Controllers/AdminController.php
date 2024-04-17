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


    public function togglePublish($id)
    {
        $incident = Incident::find($id);
        $incident->is_published = !$incident->is_published;
        $incident->save();

        return redirect()->back();
    }

}


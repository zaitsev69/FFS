<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


use App\Http\Controllers\IncidentController;
Route::post('/incident', [IncidentController::class, 'store'])->name('incident.store');

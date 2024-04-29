<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/incidents/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');

Route::patch('/admin/incidents/{id}', [AdminController::class, 'update'])->name('admin.update');


Route::post('/admin/incidents/{id}/togglePublish', [AdminController::class, 'togglePublish'])->name('admin.togglePublish');



Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');


Route::post('/incidents', [IncidentController::class, 'store'])->name( 'incident.store' );

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

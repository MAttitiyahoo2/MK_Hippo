<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Owner;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\OwnerController;

Route::post('/patient', function (Request $request) {
    PatientController::store($request);
    return view('dashboard', ['patients' => Patient::all(), 'owners' => Owner::all()]);
})->middleware(['auth'])->name('new.patient');

Route::post('/owner', function (Request $request) {
    OwnerController::store($request);
    return view('dashboard', ['patients' => Patient::all(), 'owners' => Owner::all()]);
})->middleware(['auth'])->name('new.owner');

Route::get('/', function () {
    return view('dashboard', ['patients' => Patient::all(), 'owners' => Owner::all()]);
})->middleware(['auth'])->name('dashboard');

Route::post('/delete/{id?}', function ($id = null) {
    PatientController::destroy($id);
    return view('dashboard', ['patients' => Patient::all(), 'owners' => Owner::all()]);
})->middleware(['auth'])->name('delete.patient');

Route::permanentRedirect('/dashboard', '/');

require __DIR__.'/auth.php';

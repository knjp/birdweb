<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PythonYoloController;
use App\Http\Controllers\AnalyzeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home');
});

Route::resource('fileupload', AnalyzeController::class);
Route::get('downloadcsv', [AnalyzeController::class, 'downloadCSV']);

Route::get('/python', [PythonYoloController::class, 'runPythonScript']);
Route::get('/detectbird', [PythonYoloController::class, 'runDetectScript']);
Route::get('/analyzebird', [PythonYoloController::class, 'runAnalyzeScript']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

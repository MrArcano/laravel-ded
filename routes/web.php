<?php

use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\Admin\CSVController;
use App\Http\Controllers\Admin\RaceController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('characters', CharacterController::class);
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::resource('races', RaceController::class);
    Route::resource('skills', SkillController::class);

    // CSVController
    Route::post('import-csv',[CSVController::class,'importCsv'])->name('import-csv');
    Route::get('export-csv',[CSVController::class,'exportCsv'])->name('export-csv');
});






require __DIR__.'/auth.php';

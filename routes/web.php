<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.register');
});



Route::get('/form', function () {
    return view('form.form');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/form', [FormController::class, 'create'])->name('form.create');
    Route::get('/index', [FormController::class, 'index'])->name('form.index');
    Route::post('/formpost', [FormController::class, 'store'])->name('form.store');
    Route::get('/thankyou', [FormController::class, 'thankyou'])->name('form.thankyou');
});

require __DIR__.'/auth.php';

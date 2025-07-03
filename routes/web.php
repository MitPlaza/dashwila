<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Redirect;
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
    return Redirect::route('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/dashboard/form-registro', function () {
    return view('dashboard.formulario');
})->name('form.registro');

Route::post('/dashboard/users/store', [UserController::class, 'store'])->name('dashboard.user.store');

Route::get('/sensores', [SensorController::class, 'index'])->name('sensores.index');
Route::get('sensores/edit/{sensor}', [SensorController::class, 'edit'])->name('sensores.edit');
Route::put('sensores/edit/{sensor}', [SensorController::class, 'update'])->name('sensores.update');
});

require __DIR__.'/auth.php';

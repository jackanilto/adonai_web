<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/* Cadastro de membros */
use App\Http\Controllers\MembroController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /*Cadastro de membros */
    Route::get('/cadastro-membro', [MembroController::class, 'create']);
    Route::post('/cadastro-membro', [MembroController::class, 'store']);
    Route::post('/membros', [MembroController::class, 'store'])->name('membros.store');

});

require __DIR__.'/auth.php';

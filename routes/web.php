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
    /*Rota para a pagina de cadastro de membros cadastrados */
    Route::get('/cadastro-membros', [MembroController::class, 'create'])->name('membros.create');
    /*Rota para a pagina de vizualização de membros cadastrados */
    Route::get('/membros', [MembroController::class, 'index'])->name('membros.index');
    /* Rota para a exibição individual de membros */
    Route::get('/membros/{membro}', [MembroController::class, 'show'])->name('membros.show');
    /* Rota para Editar membros */
    Route::get('/membros/{id}/edit', [MembroController::class, 'edit'])->name('membros.edit');
    /* Rota para Deletar membros */
    Route::delete('/membros/{id}', [MembroController::class, 'destroy'])->name('membros.destroy')
    /* Rota para Editar membros */;
    Route::resource('membros', MembroController::class);




});

require __DIR__.'/auth.php';

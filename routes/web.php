<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
Use App\Http\Controllers\SuporteController;
Use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;


Route::get('/ed', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');   
});

require __DIR__.'/auth.php';

Route::get('/',[SiteController::class,'index'])->name('site.home');
Route::get('/sobre',[SiteController::class,'sobre'])->name('site.sobre');
Route::get('/suporte/create',[SuporteController::class,'create'])->name('suporte.create');
Route::POST('/suporte/create',[SuporteController::class,'store'])->name('suporte.store');
Route::get('/suporte/listar',[SuporteController::class,'listar'])->name('suporte.listar');
Route::get('/suporte/atendimento/{suporte}',[SuporteController::class,'atendimento'])->name('suporte.atendimento');
Route::get('/suporte/alterar/{suporte}',[SuporteController::class,'alterar'])->name('suporte.alterar');
Route::put('/suporte/update/{suporte}',[SuporteController::class,'update'])->name('suporte.update');
Route::get('/suporte/delete/{suporte}',[SuporteController::class,'delete'])->name('suporte.delete');
Route::get('/suporte/listar',[SuporteController::class,'listar'])->middleware(['auth', 'verified'])->name('suporte.listar');
Route::get('/suporte/sair',[AuthenticatedSessionController::class,'destroy'])->name('suporte.sair');
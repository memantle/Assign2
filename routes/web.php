<?php
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/about', [FilmController::class, 'about']);
Route::get('/films/create', [FilmController::class, 'create'])->middleware(['auth', 'can:edit']);
Route::post('/films', [FilmController::class, 'store'])->middleware(['auth', 'can:edit']);
Route::get('/films/{id}', [FilmController::class, 'show'])->middleware('auth');
Route::get('/films/{id}/edit', [FilmController::class, 'edit'])->middleware(['auth', 'can:edit']);


Route::get('/login', [AuthController::class, 'index'])->name("login");
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
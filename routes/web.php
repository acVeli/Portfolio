<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'] )->name('login.post');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.post');

Route::get('/', function () {
    return view('homepage');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/admin/projets', [ProjetController::class, 'index'])->middleware('auth')->name('projets');

Route::get('/admin/skills', function () {
    return view('admin.skills');
})->middleware('auth')->name('skills');
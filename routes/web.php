<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SkillsCategoryController;

Route::get('/phpinfo', function () {
    phpinfo();
})->middleware('check.secret')->name('phpinfo');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->middleware('check.secret')->name('register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'] )->name('login.post');

Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('check.secret')->name('register.post');

Route::get('/', function () {
    $projects = \App\Models\Projet::all();
    return view('homepage', compact('projects'));
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/admin/projets', [ProjetController::class, 'index'])->middleware('auth')->name('projets');

Route::get('/admin/skills', [SkillsCategoryController::class, 'index'])->middleware('auth')->name('skills');

Route::get('/admin/projets/create', [ProjetController::class, 'create'])->middleware('auth')->name('create_projet');

Route::post('/admin/projets/store', [ProjetController::class, 'store'])->middleware('auth')->name('store_projet');

Route::post('/admin/projets/delete/{id}', [ProjetController::class, 'destroy'])->middleware('auth')->name('delete_projet');

Route::get('/admin/projets/edit/{id}', [ProjetController::class, 'edit'])->middleware('auth')->name('edit_projet');

Route::post('/admin/projets/update/{id}', [ProjetController::class, 'update'])->middleware('auth')->name('update_projet');

Route::get('/admin/skills/create', [SkillsCategoryController::class, 'create'])->middleware('auth')->name('create_skills_categorie');

Route::post('/admin/skills/store', [SkillsCategoryController::class, 'store'])->middleware('auth')->name('store_skills_categorie');

Route::get('/admin/skills/edit/{id}', [SkillsCategoryController::class, 'edit'])->middleware('auth')->name('edit_skills_categorie');

Route::post('/admin/skills/update/{id}', [SkillsCategoryController::class, 'update'])->middleware('auth')->name('update_skills_categorie');

Route::post('/admin/skills/delete/{id}', [SkillsCategoryController::class, 'destroy'])->middleware('auth')->name('delete_skills_categorie');
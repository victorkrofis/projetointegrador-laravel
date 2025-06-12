<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/aula', function () {
    return view('aula');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/detalhescurso', function () {
    return view('detalhescurso');
});

Route::get('/editarperfil', function () {
    return view('editarperfil');
});



Route::get('/licao', function () {
    return view('licao');
});

Route::get('/log', function () {
    return view('log');
});
Route::get('/meuscursos', function () {
    return view('meuscursos');
});

Route::get('/novasenha', function () {
    return view('novasenha');
});


Route::get('/resetarsenha', function () {
    return view('resetarsenha');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/verificarcerti', function () {
    return view('verificarcerti');
});

Route::get('/doacao', function () {
    return view('doacao');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

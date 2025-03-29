<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// Page's routes

Route::get(
    '/',
    [IndexController::class, 'index']
)->name('index');

Route::get(
    '/cursos',
    [IndexController::class, 'courses']
)->name('courses');

Route::get(
    '/departamentos',
    [IndexController::class, 'departments']
)->name('departments');

Route::get(
    '/contato',
    [IndexController::class, 'contact']
)->name('contact');

// Redirects

Route::get('/home', function () {
    return redirect()->action([IndexController::class, 'index']);
});

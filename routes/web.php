<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/experience-educations', 'experience')->name('experience-educations');
Route::view('/projects', 'projects')->name('projects');

// optional: 404 sederhana kalau url tidak ada
Route::fallback(function () {
    return response()->view('errors.simple-404', [], 404);
});

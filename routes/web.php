<?php

use Illuminate\Support\Facades\Route;

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





// Main Home Page (with all sections)
Route::get('/', function () {
    return view('home');
})->name('home');

// Individual Sections (optional, for testing or standalone pages)
Route::get('/about', function () {
    return view('sections.about');
})->name('about');

Route::get('/portfolio', function () {
    return view('sections.portfolio');
})->name('portfolio');


Route::get('/skills', function () {
    return view('sections.skills');
})->name('skills');

Route::get('/contact', function () {
    return view('sections.contact');
})->name('contact');







Route::get('/lp1', function () {
    return view('lp1');
});

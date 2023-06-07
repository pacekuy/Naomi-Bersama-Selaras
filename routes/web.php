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
    return view('frontend/pages/home/home');
});

Route::get('/about', function () {
    return view('frontend/pages/company/about');
});

Route::get('/profile', function () {
    return view('frontend/pages/company/profile');
});

Route::get('/certificates', function () {
    return view('frontend/pages/company/certificate');
});

Route::get('/clients', function () {
    return view('frontend/pages/company/clients');
});

Route::get('/publication', function () {
    return view('frontend/pages/company/publication');
});

Route::get('/services', function () {
    return view('frontend/pages/services/services');
});

Route::get('/projects', function () {
    return view('frontend/pages/portfolio/projects');
});

Route::get('/projects-location', function () {
    return view('frontend/pages/portfolio/location');
});

Route::get('/contact', function () {
    return view('frontend/pages/contact/contact');
});

Route::get('/news', function () {
    return view('frontend/pages/news/news');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contact', [App\Http\Controllers\Frontend\ContactsController::class, 'store'])->name('contact-store');

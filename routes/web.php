<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend/pages/home');
});

Route::get('/solutions', function () {
    return view('frontend.pages.solution');
})->name('solutions');

Route::get('/about us', function () {
    return view('frontend.pages.about');
})->name('about us');

Route::get('/team', function () {
    return view('frontend.pages.team');
})->name('team');

Route::get('/portfolio', function () {
    return view('frontend.pages.portfolio');
})->name('portfolio');

Route::get('/contact us', function () {
    return view('frontend.pages.contact');
})->name('contact us');

Route::post('/send-email', [Website::class, 'sendEmail'])->name('send.email');
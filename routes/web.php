<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::view('/', 'landing_page')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('packages', 'packages')->name('packages');

Route::middleware(['auth'])->prefix('panel/')->group(function () {
    Route::view('/', 'panel.dashboard');
    Route::view('/dashboard', 'panel.dashboard')->name('dashboard');
    Route::view('/packages', 'panel.packages')->name('my-packages');
    Route::view('/profile', 'panel.profile')->name('profile');
});

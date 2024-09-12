<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
// Route::view('/sign-in', 'auth.login')->name('login');
// Route::view('/sign-up', 'auth.register')->name('register');
// Route::view('/profile', 'auth.profile')->name('profile');
// Route::view('/profile/edit', 'auth.edit-profile')->name('profile.edit');
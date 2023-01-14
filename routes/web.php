<?php

use App\Http\Controllers\Frontend;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//front end
Route::get('',[Frontend::class, 'front_end']);

//Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin_profile/edit', [HomeController::class, 'edit_profile'])->name('edit.profile');


// user maintain Controller

Route::post('users/update_info/', [UserController::class, 'update_info'])->name('update.info');

Route::post('users/update_password/', [UserController::class, 'update_password'])->name('update.password');

Route::post('users/update_image/', [UserController::class, 'update_image'])->name('update.image');


// main news site develop start here



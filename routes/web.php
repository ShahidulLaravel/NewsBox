<?php

use App\Http\Controllers\Frontend;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeftNewsController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Models\BreakingNews;
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

Route::get('/show/breaking_news', [NewsController::class, 'add_breaking'])->name('news.breaking');

Route::post('/insert/breaking', [NewsController::class, 'insert_breaking'])->name('insert.breaking');

//left side news
Route::get('/show/left_news', [LeftNewsController::class, 'show_left_news'])->name('news.left');

Route::post('/insert/left_news', [LeftNewsController::class, 'insert_left_news'])->name('insert.left');

Route::post('/insert/popular_news', [LeftNewsController::class, 'popular_news'])->name('popular.news');

Route::post('/insert/international_news', [LeftNewsController::class, 'international_news'])->name('international.news');

//title news

Route::get('/show/title_news', [LeftNewsController::class, 'title_news'])->name('news.title');

Route::post('/insert/title_news', [LeftNewsController::class, 'insert_title_news'])->name('title_news.insert');

//add news category 

Route::get('/show/news_category', [NewsCategoryController::class, 'news_category'])->name('add.category'); 

Route::post('/insert/news_category', [NewsCategoryController::class, 'news_category_insert'])->name('category.insert'); 
 




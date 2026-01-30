<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Routes;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/admin/dashboard', function(){
//     return view('adminDashboard');
// });

Route::get('/posts/create', function(){
    return view('createPost');
});

Route::resource('posts', PostController::class);

Route::resource('categories', CategoriesController::class)->parameters(['categories' => 'categorie']);
Route::resource('admin', AdminController::class);

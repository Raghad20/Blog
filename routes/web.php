<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\UserPostController;
use App\Http\Controllers\user\UserServiceController;
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
Route::middleware('auth')->group(callback: function () {
    Route::middleware(\App\Http\Middleware\IsAdminMiddleware::class)->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('posts', PostController::class);
        Route::resource('services', ServiceController::class);
    });
    Route::get('user/posts', [UserPostController::class,'index'])->name('user.posts.index');
    Route::get('user/services', [UserServiceController::class,'index'])->name('user.services.index');
    Route::post('comment-store{post_id}',[CommentController::class,'store'])->name('comment.store');
});


Route::get('/dashboard', function () {
    return view('layouts.master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

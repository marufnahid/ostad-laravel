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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/edit', [App\Http\Controllers\PostController::class, 'index'])->name('posts.edit');
Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');


//
Route::get('/input', [\App\Http\Controllers\ModuleFourteenController::class, 'input'])->name('input');



// Define the route
Route::post('/submit', [\App\Http\Controllers\ModuleFourteenController::class, 'submit'])->name('submit');


 // Module Fifteen Code


Route::get('/fifteen/input', [\App\Http\Controllers\ModuleFifteenController::class,'input'])->name('fifteen.input');
Route::post('/fifteen/submit', [\App\Http\Controllers\ModuleFifteenController::class,'submit'])->name('fifteen.submit');

Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

Route::middleware(['AuthMiddleware', 'auth'])->group(function () {
    Route::get('/profile', function () {
        // Profile route logic
    });

    Route::get('/settings', function () {
        // Settings route logic
    });
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/accessories', [HomeController::class, 'accessories']);

Route::get('/users', [AdminController::class, 'user']);

Route::get('/posts', [AdminController::class, 'posts']);

Route::get('/createimg', [AdminController::class, 'createimg']); //post

Route::get('/deleteimg/{id}', [AdminController::class, 'deleteimg']); //post

Route::get('/updateimg/{id}', [AdminController::class, 'updateimg']); //post

Route::post('/update/{id}', [AdminController::class, 'update']);

Route::post('/upload', [AdminController::class, 'upload']);

Route::get('/delete/{id}', [AdminController::class, 'delete']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); //Route::middleware() 在發給handler處理之前，可以做更多的事情。
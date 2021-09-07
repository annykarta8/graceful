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
/*user*/
Route::get('/users', [AdminController::class, 'user']);

Route::get('/delete/{id}', [AdminController::class, 'delete']);
/*post*/
Route::get('/posts', [AdminController::class, 'posts']);

Route::get('/createimg', [AdminController::class, 'createimg']);

Route::get('/deleteimg/{id}', [AdminController::class, 'deleteimg']);

Route::get('/updateimg/{id}', [AdminController::class, 'updateimg']);

Route::post('/update/{id}', [AdminController::class, 'update']);

Route::post('/upload', [AdminController::class, 'upload']);
/*product */
Route::get('/products', [AdminController::class, 'products']);

Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']); //createproduct

Route::get('/createproduct', [AdminController::class, 'createproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

Route::post('/updateview/{id}', [AdminController::class, 'updateview']); //updateproduct

Route::get('/product/productdetail/{product_id}', [HomeController::class, 'productdetail']); //productdetail

Route::get('/product/category/{category_id}', [HomeController::class, 'showlist']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); //Route::middleware() 在發給handler處理之前，可以做更多的事情。
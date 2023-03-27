<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\authController;
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
// })->middleware('auth');

//Home Page
Route::get('/', [App\Http\Controllers\HomeController::class, "index"]);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, "dashboard"]);

//Category Route
Route::prefix('category')->group(function () {
    Route::get('index', [CategoryController::class, "index"])->middleware('auth');
    Route::get('create', [CategoryController::class, "create"])->middleware('auth');
    Route::post('store', [CategoryController::class, "store"])->middleware('auth');
    Route::get('edit/{id}', [CategoryController::class, "edit"])->middleware('auth');
    Route::post('update', [CategoryController::class, "update"])->middleware('auth');
    Route::get('delete/{id}', [CategoryController::class, "destroy"])->middleware('auth');
});

//Blog Route
Route::prefix('blog')->group(function () {
    Route::get('index', [BlogController::class, "index"])->middleware('auth');
    Route::get('create', [BlogController::class, "create"])->middleware('auth');
    Route::post('store', [BlogController::class, "store"])->middleware('auth');
    Route::get('edit/{id}', [BlogController::class, "edit"])->middleware('auth');
    Route::get('show/{id}', [BlogController::class, "show"])->middleware('auth');
    Route::post('update', [BlogController::class, "update"])->middleware('auth');
    Route::get('delete/{id}', [BlogController::class, "destroy"]);
});

//Auth Route
Route::prefix('auth')->group(function () {
    Route::get('login', [authController::class, "login"])->name('login');
    Route::get('logout', [authController::class, "logout"]);
    Route::post('loginRequest', [authController::class, "loginRequest"]);
});
// Route::resource('category', 'CategoryController');

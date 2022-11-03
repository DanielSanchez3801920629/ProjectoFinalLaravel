<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Example resource route and search
// Route::resource('/admin/categories', CategoryController::class);
// Route::get('/admin/categories/search/{category_name}', [CategoryController::class, 'search']);

// Register
Route::post('/register', [AuthController::class, 'register'] );

//Login
Route::post('/admin/login', [AuthController::class, 'login']);

// Public Routes
Route::get('/admin/categories', [CategoryController::class, 'index']);
Route::get('/admin/products', [ProductController::class, 'index']);
Route::get('/admin/sales', [SalesController::class, 'index']);
Route::get('/admin/categories/{id}', [CategoryController::class, 'show'] );
Route::get('/admin/products/{id}', [ProductController::class, 'show'] );
Route::get('/admin/sales/{id}', [SalesController::class, 'show'] );
Route::post('/admin/sales', [SalesController::class, 'store'] );
Route::get('/admin/products/search/{product_name}', [ProductController::class, 'search']);

// Protected Route
Route::group(['middleware' => ['auth:sanctum']], function() {
    //Store Methods
    Route::post('/admin/categories', [CategoryController::class, 'store'] );
    Route::post('/admin/products', [ProductController::class, 'store'] );
    //Update Methods
    Route::put('/admin/categories/{id}', [CategoryController::class, 'update'] );
    Route::put('/admin/products/{id}', [ProductController::class, 'update'] );
    Route::put('/admin/sales/{id}', [SalesController::class, 'update'] );
    //Delete Methods
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'] );
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'] );
    Route::delete('/admin/sales/{id}', [SalesController::class, 'destroy'] );
    //Logout
    Route::post('/admin/logout', [AuthController::class, 'logout']);
});


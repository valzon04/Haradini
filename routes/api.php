<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SerieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('category/store', [CategoryController::class, 'Store']);
Route::get('categories', [CategoryController::class, 'Index']);
Route::post('category/update/{id}', [CategoryController::class, 'Update']);
Route::delete('category/destroy/{id}', [CategoryController::class, 'Destroy']);
Route::get('category/show/{id}', [CategoryController::class, 'Show']);



Route::post('movie/store', [MovieController::class, 'Store']);
Route::post('movie/update/{id}', [MovieController::class, 'Update']);
Route::get('movies', [MovieController::class, 'Index']);
Route::delete('movie/destroy/{id}', [MovieController::class, 'Destroy']);
Route::get('movie/show/{id}', [MovieController::class, 'Show']);


Route::post('serie/store', [SerieController::class, 'Store']);
Route::get('series', [SerieController::class, 'Index']);
Route::post('serie/update/{id}', [SerieController::class, 'Update']);
Route::delete('serie/destroy/{id}', [SerieController::class, 'Destroy']);
Route::get('serie/show/{id}', [SerieController::class, 'Show']);



Route::post('role/store', [RoleController::class, 'Store']);
Route::get('roles', [RoleController::class, 'Index']);
Route::post('role/update/{id}', [RoleController::class, 'Update']);
Route::delete('role/destroy/{id}', [RoleController::class, 'Destroy']);
Route::get('role/show/{id}', [RoleController::class, 'Show']);

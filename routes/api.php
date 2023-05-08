<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;


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

Route::group(['prefix' => 'v1'], function () {
  // Route for creating a new album
Route::post('/albums', [AlbumController::class, 'store']);

// Route for retrieving a single album by ID
Route::get('/albums/{id}', [AlbumController::class, 'show']);

// Route for retrieving all albums
Route::get('/albums', [AlbumController::class, 'index']);

// Route for updating an existing album by ID
Route::put('/albums/{id}', [AlbumController::class, 'update']);

// Route for deleting an existing album by ID
Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);

});


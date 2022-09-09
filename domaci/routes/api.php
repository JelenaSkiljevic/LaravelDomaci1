<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\PrizeController;
use App\Http\Controllers\WriterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//vracanje knjiga
Route::get('/books',[BookController::class,'index']);
Route::get('/books/{id}',[BookController::class,'show']);

//pisaca
Route::get('/writers',[WriterController::class,'index']);
Route::get('/writers/{id}',[WriterController::class,'show']);

//vracanje nagrada
Route::get('/prizes',[PrizeController::class,'index']);
Route::get('/prizes/{id}',[PrizeController::class,'show']);

//biblioteka
Route::get('/libraries',[LibraryController::class,'index']);
Route::get('/libraries/{id}',[LibraryController::class,'show']);
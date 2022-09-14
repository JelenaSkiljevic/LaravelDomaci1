<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
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



//vracanje knjiga ()
//Route::get('/books',[BookController::class,'index']);
Route::get('/books/{id}',[BookController::class,'show']);

//pisaca
Route::get('/writers',[WriterController::class,'index']);
Route::get('/writers/{id}',[WriterController::class,'show']);

//zanrova
Route::get('/genres',[GenreController::class,'index']);
Route::get('/genres/{id}',[GenreController::class,'show']);

//vracanje nagrada
Route::get('/prizes',[PrizeController::class,'index']);
Route::get('/prizes/{id}',[PrizeController::class,'show']);

//biblioteka
Route::get('/libraries',[LibraryController::class,'index']);
Route::get('/libraries/{id}',[LibraryController::class,'show']);

//ruta za funkcionisanje auth -register
Route::post('/register', [AuthController::class, 'register']);
//login
Route::post('/login',[AuthController::class, 'login']);


//ruta da jedino ulogovani user moze da menja, dodaje i brise knjige
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('/books', BookController::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

//ovoj ruti sa prikaz mogu svi
Route::resource('/books', BookController::class)->only(['index']);
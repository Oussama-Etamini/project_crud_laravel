<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;

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



Route::resource('article',ArticleController::class);

Route::get('com/create/{id}',[CommentaireController::class,'create']);
Route::post('com/store/{id}',[CommentaireController::class,'store']);

Route::post('search',[ArticleController::class,'search']);

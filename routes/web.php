<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


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

Route::get('/', function () {
    return view('welcome');
});

//Desde Laravel 9 se pueden usar route groups
Route::controller(BookController::class)->group(function(){
    Route::get('books','index');
    Route::get('books/create', 'create');
    Route::get('books/{book}', 'show');
});

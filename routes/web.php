<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//return view('welcome');
//});

//Question 1
Route::post( '/form', [MainController::class, ( 'info' )] );

// Question 2
Route::post( '/useragent', [MainController::class, ( 'userAgent' )] );

// Question 3
Route::get( '/page', [MainController::class, ( 'pageQuery' )] );

// Question 4
Route::get( '/responsive', [MainController::class, ( 'jsonResponsive' )] );

// Question 5
Route::post( '/uploads', [MainController::class, ( 'uploadFeature' )] );

// Question 6
Route::post( '/token', [MainController::class, ( 'rememberToken' )] );

// Question 7
Route::post( '/submit', [MainController::class, ( 'submit' )] );

<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/globalbusinessconulting_2023_AB', [App\Http\Controllers\HomeController::class, 'admindashbord'])->name('globalbusinessconulting_2023_AB');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


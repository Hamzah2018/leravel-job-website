<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\jobsController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });             //homeController
Route::get('/home',[homeController::class,'homef'])->name('home');
Route::get('/job',[jobsController::class,'jobs'])->name('job');

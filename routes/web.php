<?php

use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\protfileDashController;
use App\Http\Controllers\QualificationDashController;
use App\Http\Controllers\skillsDashController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
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
    return view('master');
    });
Route::get('/jobslist', function () {
        return view('admindashord.jobslist');
    });


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });             //homeController
Route::get('/home',[homeController::class,'homef'])->name('home');
Route::get('/job',[jobsController::class,'jobs'])->name('job');
Route::get('/protfile',[protfileDashController::class,'protfile'])->name('protfile');
Route::get('/qual',[QualificationDashController::class,'qualifica'])->name('qual');
Route::get('/skills',[skillsDashController::class,'skill'])->name('skills');
Route::get('/view_jobs',[JobController::class,'viewJobs']);
Route::get('/job_add',[JobController::class,'addJobs']);

Route::get('/edit/{id}',[JobController::class,'editJobs']);
Route::post('/edit/{id}',[JobController::class,'editJobs']);

    Route::get('add/{id}',function($id){
        $job = Job::find($id);
        $job->delete();
        return redirect("view_jobs");
    });


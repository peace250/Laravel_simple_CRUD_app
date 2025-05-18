<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\AdminController;

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
//     return view('index');
// });
//authentication
Route::get('/auth/register',[AdminController::class,'create'])->name('auth.register');
Route::post('/auth/register',[AdminController::class,'store'])->name('auth.register');

Route::get('/',[AdminController::class,'showLogin'])->name('login');

Route::post('/auth/login',[AdminController::class,'login'])->name('auth.login');






Route::post('/candidate/index',[AdminController::class,'logout'])->name('logout');
Route::get('candidate/index',[CandidateController::class,'index'])->name('candidate.index');
Route::get('candidate/create',[CandidateController::class,'create'])->name('candidate.create');
Route::post('candidate/create',[CandidateController::class,'store'])->name('candidate.store');


Route::delete('candidate/delete/{id}',[CandidateController::class,'destroy'])->name('candidate.destroy');
Route::get('candidate/edit/{id}',[CandidateController::class,'edit'])->name('candidate.edit');
Route::put('candidate/edit/{id}',[CandidateController::class,'update'])->name('candidate.update');

// grade routes
Route::get('grade/index',[GradeController::class,'index'])->name('grade.index');
Route::get('grade/create',[GradeController::class,'create'])->name('grade.create');
Route::post('grade/create',[GradeController::class,'store'])->name('grade.store');

//report route
Route::get('grade/report',[GradeController::class,'report'])->name('grade.report');

//delete
Route::delete('grade/index/{id}',[GradeController::class,'delete'])->name('grade.delete');
Route::get('grade/edit/{id}',[GradeController::class,'edit'])->name('grade.edit');
Route::put('grade/edit/{id}',[GradeController::class,'update'])->name('grade.update');


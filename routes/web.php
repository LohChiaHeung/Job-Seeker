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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::get('/addJob', function () {
    return view('addJob',['categoryID'=>App\Models\Category::all()]);
});

Route::post('/addCategory', [App\Http\Controllers\CategoryController::class, 'store'])->name('storeCategory');
Route::post('/addJob', [App\Http\Controllers\JobController::class, 'store'])->name('storeJob');
Route::post('/updateJob', [App\Http\Controllers\JobController::class, 'update'])->name('updateJob');

Route::get('/showCategory', [App\Http\Controllers\CategoryController::class, 'view'])->name('viewCategory');

Route::get('/showJob', [App\Http\Controllers\JobController::class, 'view'])->name('viewJob');
//1
Route::get('/deleteJob/{id}',[App\Http\Controllers\JobController::class,'delete'])->name('deleteJob');

Route::get('editJob/{id}',[App\Http\Controllers\JobController::class,'edit'])->name('editJob');

Route::get('/jobDetail/{id}',[App\Http\Controllers\JobController::class,'jobdetail'])->name('Job.detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

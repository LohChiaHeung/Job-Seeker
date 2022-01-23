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
})->name('welcome');


Route::get('/addCategory', function () {
    return view('addCategory');
});

Route::get('/addCompany', function () {
    return view('addCompany');
});

Route::get('/addJob', function () {
    return view('addJob',['categoryID'=>App\Models\Category::all()], ['companyID'=>App\Models\Company::all()]);
});

Route::post('/addCategory', [App\Http\Controllers\CategoryController::class, 'store'])->name('storeCategory');
Route::post('/addCompany', [App\Http\Controllers\CompanyController::class, 'store'])->name('storeCompany');
Route::post('/addJob', [App\Http\Controllers\JobController::class, 'store'])->name('storeJob');
Route::post('/updateJob', [App\Http\Controllers\JobController::class, 'update'])->name('updateJob');
Route::post('/updateCompany', [App\Http\Controllers\CompanyController::class, 'update'])->name('updateCompany');
Route::post('/addWishlist', [App\Http\Controllers\WishlistController::class, 'add'])->name('add.to.wishlist');

Route::get('/showCategory', [App\Http\Controllers\CategoryController::class, 'view'])->name('viewCategory');

Route::get('/showJob', [App\Http\Controllers\JobController::class, 'view'])->name('viewJob');

Route::get('/showCompany', [App\Http\Controllers\CompanyController::class, 'view'])->name('viewCompany');
//1
Route::get('/deleteJob/{id}',[App\Http\Controllers\JobController::class,'delete'])->name('deleteJob');

Route::get('/deleteCategory/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('deleteCategory');

Route::get('/deleteCompany/{id}',[App\Http\Controllers\CompanyController::class,'delete'])->name('deleteCompany');

Route::get('editJob/{id}',[App\Http\Controllers\JobController::class,'edit'])->name('editJob');

Route::get('editCompany/{id}',[App\Http\Controllers\CompanyController::class,'edit'])->name('editCompany');

Route::get('/jobDetail/{id}',[App\Http\Controllers\JobController::class,'jobdetail'])->name('Job.detail');

Route::get('/listJobs', [App\Http\Controllers\JobController::class, 'listJob'])->name('jobs');

Route::get('/listCompanies', [App\Http\Controllers\CompanyController::class, 'listCompany'])->name('companies');

Route::get('/jobDetail/{id}',[App\Http\Controllers\JobController::class,'jobdetail'])->name('job.detail');

Route::get('/companiesDetail/{id}',[App\Http\Controllers\CompanyController::class,'companiesDetails'])->name('companies.detail');

Route::get('/deleteWishlist/{id}',[App\Http\Controllers\WishlistController::class,'delete'])->name('delete.wishlist');

Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'showWishlist'])->name('show.wishlist');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/IT',[App\Http\Controllers\JobController::class,'viewIT'])->
name('jobs.IT');

Route::get('/Accountant',[App\Http\Controllers\JobController::class,'viewAccountant'])->
name('jobs.accountant');

Route::get('/Artist',[App\Http\Controllers\JobController::class,'viewArtist'])->
name('jobs.artist');

Route::get('/FullTime',[App\Http\Controllers\JobController::class,'viewFull'])->
name('jobs.full');

Route::get('/PartTime',[App\Http\Controllers\JobController::class,'viewPart'])->
name('jobs.part');

Route::get('/companyJob/{id}',[App\Http\Controllers\CompanyController::class,'companyJob'])->
name('companies.job');

Route::post('/searchCareers',[App\Http\Controllers\JobController::class,'searchCareer'])->name('search.careers');

Route::get('/noResult', function () {
    return view('noResult');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');

Route::get('/blog/details',[HomeController::class,'blogDetails'])->name('blog.details');
Route::get('/blog/detail/{id}',[HomeController::class,'blogDetail'])->name('blog.detail');
Route::get('/business',[HomeController::class,'business'])->name('business');
Route::get('/culture',[HomeController::class,'culture'])->name('culture');
Route::get('/politics',[HomeController::class,'politics'])->name('politics');

Route::get('/signup',[VisitorController::class,'signup'])->name('visitor.signup');
Route::post('/signup/store',[VisitorController::class,'signupStore'])->name('visitor.store');
Route::get('/signin',[VisitorController::class,'login'])->name('visitor.login');
Route::post('/signin',[VisitorController::class,'loginCheck'])->name('visitor.login');
Route::get('/logout',[VisitorController::class,'logOut'])->name('visitor.logOut');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resources(['categories'=> CategoryController::class]);
    Route::resources(['blogs'=>BlogController::class]);
    Route::resources(['users'=>UserController::class]);

});

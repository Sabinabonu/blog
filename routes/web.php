<?php

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [SiteController::class, 'index']);
Route::prefix('admin/')->name('admin.')->group(function(){

    Route::get('index',[AdminController::class,'index'])->name('index');
    Route::get('contact',[AdminController::class,'contact'])->name('contact');
    Route::get('home',[AdminController::class,'home'])->name('home');
    Route::get('community',[AdminController::class,'community'])->name('community');
    Route::get('events',[AdminController::class,'events'])->name('events');
    Route::get('faq',[AdminController::class,'faq'])->name('faq');
    Route::get('news',[AdminController::class,'news'])->name('news');
    Route::get('praduct',[AdminController::class,'praduct'])->name('praduct');
    Route::get('servis',[AdminController::class,'servis'])->name('servis');
    Route::get('about',[AdminController::class,'about'])->name('about');

});

Route::prefix('manager/')->name('manager.')->group(function(){

    Route::get('index',[ManagerController::class,'index'])->name('index');
    Route::get('contact',[ManagerController::class,'contact'])->name('contact');
    Route::get('home',[ManagerController::class,'home'])->name('home');
    Route::get('community',[ManagerController::class,'community'])->name('community');
    Route::get('events',[ManagerController::class,'events'])->name('events');
    Route::get('faq',[ManagerController::class,'faq'])->name('faq');
    Route::get('news',[ManagerController::class,'news'])->name('news');
    Route::get('praduct',[ManagerController::class,'praduct'])->name('praduct');
    Route::get('servis',[ManagerController::class,'servis'])->name('servis');
    Route::get('about',[ManagerController::class,'about'])->name('about');

});

Route::prefix('user/')->name('user.')->group(function(){

    Route::get('index',[UserController::class,'index'])->name('index');
    Route::get('contact',[UserController::class,'contact'])->name('contact');
    Route::get('home',[UserController::class,'home'])->name('home');
    Route::get('community',[UserController::class,'community'])->name('community');
    Route::get('events',[UserController::class,'events'])->name('events');
    Route::get('faq',[UserController::class,'faq'])->name('faq');
    Route::get('news',[UserController::class,'news'])->name('news');
    Route::get('praduct',[UserController::class,'praduct'])->name('praduct');
    Route::get('servis',[UserController::class,'servis'])->name('servis');
    Route::get('about',[UserController::class,'about'])->name('about');

});

